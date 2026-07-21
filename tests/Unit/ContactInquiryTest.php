<?php

/*
 *
 *   Created by Techibytes Media Development Team
 *   Copyright Ⓒ 2026. All rights reserved, https://techibytesmedia.com/
 *   Project: st-michaels-afh
 *   Last modified: 7/20/26, 9:30 PM
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

use App\Models\ContactInquiry;

test('contact inquiries only accept approved fields through mass assignment', function (): void {
    $inquiry = new ContactInquiry();

    $approved_attributes = [
        'name' => 'Jane Doe',
        'phone' => '253-555-0100',
        'email' => 'jane@example.com',
        'relationship_to_resident' => 'Child',
        'care_needed' => 'Long-term residential care',
        'message' => 'I would like to schedule a visit.',
    ];

    $inquiry->fill($approved_attributes);

    expect($inquiry->getAttributes())
        ->toMatchArray($approved_attributes)
        ->and($inquiry->isFillable('website'))->toBeFalse();
});
