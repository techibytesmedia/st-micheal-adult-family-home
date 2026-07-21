<?php
/*
 *
 *   Created by Techibytes Media Development Team
 *   Copyright Ⓒ 2026. All rights reserved, https://techibytesmedia.com/
 *   Project: st-michaels-afh
 *   Last modified: 7/20/26, 10:08 PM
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

test('the inquiry email identifies the sender for replies', function (): void {
    $mail = new ContactInquiryReceived([
        'name' => 'Jane Doe',
        'phone' => '253-555-0100',
        'email' => 'jane@example.com',
        'message' => 'I would like to schedule a visit.',
    ]);

    $envelope = $mail->envelope();

    expect($envelope->subject)
        ->toBe('New Website Inquiry from Jane Doe')
        ->and($envelope->replyTo)->toHaveCount(1)
        ->and($envelope->replyTo[0]->address)->toBe('jane@example.com')
        ->and($envelope->replyTo[0]->name)->toBe('Jane Doe');
});
