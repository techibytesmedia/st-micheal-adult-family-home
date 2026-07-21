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

test('the home page includes valid local business and website schema', function (): void {
    $response = $this->get('/')->assertSuccessful();
    $html = $response->getContent();

    expect(preg_match('/<script type="application\/ld\+json">\s*(.*?)\s*<\/script>/s', $html, $matches))->toBe(1);

    try {
        $schema = json_decode($matches[1], true, flags: JSON_THROW_ON_ERROR);
    } catch (JsonException $e) {
        $this->fail('Invalid JSON schema: ' . $e->getMessage());
    }

    expect($schema['@context'])->toBe('https://schema.org')
        ->and($schema['@graph'][0]['@type'])->toBe('LocalBusiness')
        ->and($schema['@graph'][0]['name'])->toBe('St. Michaels Adult Family Home LLC')
        ->and($schema['@graph'][0]['address']['streetAddress'])->toBe('6414 South M St')
        ->and($schema['@graph'][0]['openingHoursSpecification'][0]['opens'])->toBe('00:00')
        ->and($schema['@graph'][0]['openingHoursSpecification'][0]['closes'])->toBe('23:59')
        ->and($schema['@graph'][1]['@type'])->toBe('WebSite');
});

test('public pages include canonical and social metadata', function (string $uri): void {
    $this->get($uri)
        ->assertSuccessful()
        ->assertSee('<link rel="canonical"', false)
        ->assertSee('<meta property="og:image"', false)
        ->assertSee('<meta name="twitter:card" content="summary_large_image">', false);
})->with(['/', '/about-us', '/services', '/our-home', '/faqs', '/contact']);

test('the sitemap lists every public page', function (): void {
    $response = $this->get('/sitemap.xml')
        ->assertSuccessful()
        ->assertHeader('Content-Type', 'application/xml');

    foreach (['home', 'about', 'services', 'our-home', 'faqs', 'contact'] as $route_name) {
        $response->assertSee(config('app.url') . route($route_name, absolute: false), false);
    }
});

test('robots file advertises the sitemap', function (): void {
    expect(file_get_contents(public_path('robots.txt')))
        ->toContain('Sitemap: https://stmichaelsafh.com/sitemap.xml');
});
