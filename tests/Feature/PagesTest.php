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

test('public pages load successfully', function (string $uri, string $expectedText): void {
    $this->get($uri)
        ->assertSuccessful()
        ->assertSee($expectedText, false);
})->with([
    'home' => ['/', 'adult family home care in Tacoma, WA'],
    'about' => ['/about-us', 'Care that honors every resident'],
    'services' => ['/services', 'Not sure what level of care your loved one needs?'],
    'our home' => ['/our-home', 'no stock photography'],
    'faqs' => ['/faqs', 'What is an adult family home?'],
    'contact' => ['/contact', 'Send us a message'],
]);

test('every page shows the business phone number', function (string $uri): void {
    $this->get($uri)
        ->assertSuccessful()
        ->assertSee(config('site.phone'));
})->with(['/', '/about-us', '/services', '/our-home', '/faqs', '/contact']);

test('the home page includes local business schema markup', function (): void {
    $this->get('/')
        ->assertSuccessful()
        ->assertSee('application/ld+json', false)
        ->assertSee('LocalBusiness', false)
        ->assertSee('6414 South M St', false);
});
