<?php

/*
 *
 *   Created by Techibytes Media Development Team
 *   Copyright Ⓒ 2026. All rights reserved, https://techibytesmedia.com/
 *   Project: st-michaels-afh
 *   Last modified: 7/20/26, 9:32 PM
 *   Modified or Created by: erigb
 *
 *   Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file
 *   except in compliance with the License. You may obtain a copy of the License at
 *   https://www.apache.org/licenses/LICENSE-2.0. Unless required by applicable law or agreed to in writing, software
 *    distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND,
 *    either express or implied. See the License for the specific language governing permissions and
 *    limitations under the License.
 * /
 */

declare(strict_types = 1);

use App\Mail\ContactInquiryReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('a visitor can submit a contact inquiry', function (): void {
    Mail::fake();

    $response = $this->from(route('contact'))->post(route('contact.store'), [
        'name' => 'Jane Doe',
        'phone' => '253-555-0100',
        'email' => 'jane@example.com',
        'relationship_to_resident' => 'Child',
        'care_needed' => 'Long-term residential care',
        'message' => 'I am looking for care for my father. Do you have availability?',
    ]);

    $response->assertRedirect(route('contact'))->assertSessionHas('status');

    $this->assertDatabaseHas('contact_inquiries', [
        'name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'care_needed' => 'Long-term residential care',
    ]);

    Mail::assertSent(ContactInquiryReceived::class, fn (ContactInquiryReceived $mail) => $mail->hasTo(config('site.email'))
            && 'Jane Doe' === $mail->inquiry->name);
});

test('required fields are validated', function (string $field): void {
    Mail::fake();

    $valid_payload = [
        'name' => 'Jane Doe',
        'phone' => '253-555-0100',
        'email' => 'jane@example.com',
        'message' => 'Looking for care options.',
    ];

    $this->from(route('contact'))
        ->post(route('contact.store'), array_merge($valid_payload, [$field => '']))
        ->assertRedirect(route('contact'))
        ->assertSessionHasErrors($field);

    $this->assertDatabaseEmpty('contact_inquiries');
    Mail::assertNothingSent();
})->with(['name', 'phone', 'email', 'message']);

test('an invalid email address is rejected', function (): void {
    Mail::fake();

    $this->from(route('contact'))
        ->post(route('contact.store'), [
            'name' => 'Jane Doe',
            'phone' => '253-555-0100',
            'email' => 'not-an-email',
            'message' => 'Looking for care options.',
        ])
        ->assertRedirect(route('contact'))
        ->assertSessionHasErrors('email');

    $this->assertDatabaseEmpty('contact_inquiries');
});

test('submissions that fill the honeypot field are rejected', function (): void {
    Mail::fake();

    $this->from(route('contact'))
        ->post(route('contact.store'), [
            'name' => 'Spam Bot',
            'phone' => '000-000-0000',
            'email' => 'bot@example.com',
            'message' => 'Buy my product.',
            'website' => 'https://spam.example.com',
        ])
        ->assertRedirect(route('contact'))
        ->assertSessionHasErrors('website');

    $this->assertDatabaseEmpty('contact_inquiries');
    Mail::assertNothingSent();
});

test('the inquiry is still saved when the notification email fails', function (): void {
    Mail::shouldReceive('to')->once()->andThrow(new RuntimeException('SMTP down'));

    $this->from(route('contact'))
        ->post(route('contact.store'), [
            'name' => 'Jane Doe',
            'phone' => '253-555-0100',
            'email' => 'jane@example.com',
            'message' => 'Looking for care options.',
        ])
        ->assertRedirect(route('contact'))
        ->assertSessionHas('status');

    $this->assertDatabaseHas('contact_inquiries', ['email' => 'jane@example.com']);
});
