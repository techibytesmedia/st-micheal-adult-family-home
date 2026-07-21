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

namespace App\Http\Controllers;

use Throwable;
use App\Models\ContactInquiry;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactInquiryReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreContactInquiryRequest;

class ContactInquiryController extends Controller
{
    public function store(StoreContactInquiryRequest $request): RedirectResponse
    {
        $inquiry = ContactInquiry::create($request->safe()->except('website'));

        try {
            Mail::to(config('site.email'))->send(new ContactInquiryReceived($inquiry));
        } catch (Throwable $exception) {
            // The inquiry is already saved; a mail failure should not lose the lead.
            Log::error('Failed to send contact inquiry notification.', [
                'inquiry_id' => $inquiry->id,
                'exception' => $exception->getMessage(),
            ]);
        }

        return redirect()
            ->route('contact')
            ->with('status', 'Thank you for reaching out. We received your message and will contact you soon.');
    }
}
