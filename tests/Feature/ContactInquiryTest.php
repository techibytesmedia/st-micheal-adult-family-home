<?php

/*
 *
 *   Created by Techibytes Media Development Team
 *   Copyright Ⓒ 2026. All rights reserved, https://techibytesmedia.com/
 *   Project: st-michaels-afh
 *   Last modified: 7/20/26, 10:10 PM
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

    Mail::assertSent(ContactInquiryReceived::class, fn (ContactInquiryReceived $mail) => $mail->hasTo('hodlope@aol.com')
            && $mail->hasReplyTo('jane@example.com')
            && 'Jane Doe' === $mail->inquiry['name']);
});

test('the inquiry email contains the submitted contact details', function (): void {
    $mail = new ContactInquiryReceived([
        'name' => 'Jane Doe',
        'phone' => '253-555-0100',
        'email' => 'jane@example.com',
        'relationship_to_resident' => 'Child',
        'care_needed' => 'Long-term residential care',
        'message' => 'I would like to schedule a visit.',
    ]);

    $mail->assertSeeInHtml('Jane Doe')
        ->assertSeeInHtml('A family has reached out')
        ->assertSeeInHtml('253-555-0100')
        ->assertSeeInHtml('jane@example.com')
        ->assertSeeInHtml('Long-term residential care')
        ->assertSeeInHtml('I would like to schedule a visit.')
        ->assertSeeInText('NEW CARE INQUIRY')
        ->assertSeeInText('Jane Doe')
        ->assertSeeInText('I would like to schedule a visit.');
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

    Mail::assertNothingSent();
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

    Mail::assertNothingSent();
});

test('a mail delivery failure is not reported as a successful submission', function (): void {
    Mail::shouldReceive('to')->once()->andThrow(new RuntimeException('SMTP down'));

    $this->withoutExceptionHandling();

    expect(fn () => $this->from(route('contact'))->post(route('contact.store'), [
        'name' => 'Jane Doe',
        'phone' => '253-555-0100',
        'email' => 'jane@example.com',
        'message' => 'Looking for care options.',
    ]))->toThrow(RuntimeException::class, 'SMTP down');
});
