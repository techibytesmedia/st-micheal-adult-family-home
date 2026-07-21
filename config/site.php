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

return [
    /*
    |--------------------------------------------------------------------------
    | Business Information
    |--------------------------------------------------------------------------
    |
    | Central place for the business name, address, and contact details so
    | they stay consistent across the header, footer, contact page, and
    | schema markup (important for local SEO / NAP consistency).
    |
    */

    'name' => 'St. Michaels Adult Family Home LLC',
    'short_name' => 'St. Michaels Adult Family Home',
    'tagline' => 'Compassionate care in a safe, home-like environment.',
    'tagline_alt' => 'A caring home for comfort, dignity, and daily support.',

    'phone' => '+1 253-583-4218',
    'phone_href' => '+12535834218',
    'email' => env('SITE_CONTACT_EMAIL', 'hodlope@aol.com'),

    'address' => [
        'street' => '6414 South M St',
        'city' => 'Tacoma',
        'state' => 'WA',
        'zip' => '98408',
    ],

    'map_embed_url' => 'https://www.google.com/maps?q=6414+South+M+St,+Tacoma,+WA+98408&output=embed',
    'map_link' => 'https://share.google/ln6qvVChkNIaAmVen',
];
