@extends('layouts.app')

@section('title', 'Contact | '.config('site.name'))
@section('meta_description', 'Contact St. Michaels Adult Family Home in Tacoma, WA. Call 253-583-4218 or send a message to ask about care, availability, and scheduling a visit.')

@section('content')

@include('partials.page-header', [
    'eyebrow' => 'Contact',
    'title' => 'We\'re here to <span class="italic text-navy-700 dark:text-navy-300">help</span>',
    'intro' => 'Need help finding care for a loved one? Send us a message or call today — we\'ll answer your questions and help you schedule a visit.',
])

<section class="bg-white dark:bg-night-950">
    <div class="mx-auto grid max-w-6xl gap-12 px-4 py-16 sm:px-6 lg:grid-cols-[1fr_1.3fr] lg:py-24">

        {{-- Contact details --}}
        <div data-animate class="space-y-8">
            <div>
                <h2 class="font-display text-2xl font-semibold text-navy-900 dark:text-cream-100">{{ config('site.name') }}</h2>
                <ul class="mt-6 space-y-5 text-sm">
                    <li class="flex gap-4">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-cream-100 text-navy-700 dark:bg-night-700 dark:text-cream-200">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                        </span>
                        <div>
                            <p class="font-bold text-navy-900 dark:text-cream-100">Address</p>
                            <a href="{{ config('site.map_link') }}" target="_blank" rel="noopener" class="hover:text-clay-600">
                                {{ config('site.address.street') }}<br>
                                {{ config('site.address.city') }}, {{ config('site.address.state') }} {{ config('site.address.zip') }}
                            </a>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-cream-100 text-navy-700 dark:bg-night-700 dark:text-cream-200">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/></svg>
                        </span>
                        <div>
                            <p class="font-bold text-navy-900 dark:text-cream-100">Phone</p>
                            <a href="tel:{{ config('site.phone_href') }}" class="hover:text-clay-600">{{ config('site.phone') }}</a>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-cream-100 text-navy-700 dark:bg-night-700 dark:text-cream-200">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                        </span>
                        <div>
                            <p class="font-bold text-navy-900 dark:text-cream-100">Email</p>
                            <a href="mailto:{{ config('site.email') }}" class="hover:text-clay-600">{{ config('site.email') }}</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="overflow-hidden rounded-xl border border-cream-200 dark:border-night-700">
                <iframe
                    src="{{ config('site.map_embed_url') }}"
                    title="Map showing the location of St. Michaels Adult Family Home in Tacoma, WA"
                    class="h-72 w-full"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen></iframe>
            </div>
        </div>

        {{-- Contact form --}}
        <div data-animate style="--stagger: 120ms" class="rounded-xl border border-cream-200 bg-cream-50 dark:border-night-700 dark:bg-night-900 p-6 sm:p-10">
            @if (session('status'))
                <div class="mb-6 flex items-start gap-3 rounded-xl border border-navy-200 bg-navy-50 p-4 dark:border-night-500 dark:bg-night-800 text-sm text-navy-900 dark:text-cream-100" role="status">
                    <svg class="h-5 w-5 shrink-0 text-navy-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                    {{ session('status') }}
                </div>
            @endif

            <h2 class="font-display text-2xl font-semibold text-navy-900 dark:text-cream-100">Send us a message</h2>
            <p class="mt-2 text-sm">We usually respond within one business day.</p>

            <form method="POST" action="{{ route('contact.store') }}" class="mt-8 grid gap-5 sm:grid-cols-2">
                @csrf

                {{-- Honeypot field for spam bots: hidden from people, must stay empty --}}
                <div class="hidden" aria-hidden="true">
                    <label for="website">Website</label>
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off" value="{{ old('website') }}">
                </div>

                <div>
                    <label for="name" class="mb-1.5 block text-sm font-bold text-navy-900 dark:text-cream-100">Full name <span class="text-clay-600">*</span></label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name"
                           class="w-full rounded-lg border border-cream-300 bg-white px-4 py-2.5 text-sm text-navy-900 dark:text-cream-100 focus:border-navy-500 focus:outline-none focus:ring-2 focus:ring-navy-200 dark:border-night-600 dark:bg-night-800 dark:focus:border-navy-400 dark:focus:ring-night-600">
                    @error('name') <p class="mt-1 text-xs text-clay-700">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="phone" class="mb-1.5 block text-sm font-bold text-navy-900 dark:text-cream-100">Phone number <span class="text-clay-600">*</span></label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required autocomplete="tel"
                           class="w-full rounded-lg border border-cream-300 bg-white px-4 py-2.5 text-sm text-navy-900 dark:text-cream-100 focus:border-navy-500 focus:outline-none focus:ring-2 focus:ring-navy-200 dark:border-night-600 dark:bg-night-800 dark:focus:border-navy-400 dark:focus:ring-night-600">
                    @error('phone') <p class="mt-1 text-xs text-clay-700">{{ $message }}</p> @enderror
                </div>

                <div class="sm:col-span-2">
                    <label for="email" class="mb-1.5 block text-sm font-bold text-navy-900 dark:text-cream-100">Email address <span class="text-clay-600">*</span></label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                           class="w-full rounded-lg border border-cream-300 bg-white px-4 py-2.5 text-sm text-navy-900 dark:text-cream-100 focus:border-navy-500 focus:outline-none focus:ring-2 focus:ring-navy-200 dark:border-night-600 dark:bg-night-800 dark:focus:border-navy-400 dark:focus:ring-night-600">
                    @error('email') <p class="mt-1 text-xs text-clay-700">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="relationship_to_resident" class="mb-1.5 block text-sm font-bold text-navy-900 dark:text-cream-100">Relationship to resident</label>
                    <select id="relationship_to_resident" name="relationship_to_resident"
                            class="w-full rounded-lg border border-cream-300 bg-white px-4 py-2.5 text-sm text-navy-900 dark:text-cream-100 focus:border-navy-500 focus:outline-none focus:ring-2 focus:ring-navy-200 dark:border-night-600 dark:bg-night-800 dark:focus:border-navy-400 dark:focus:ring-night-600">
                        <option value="" @selected(old('relationship_to_resident') === '')>Select one&hellip;</option>
                        @foreach (['Child', 'Spouse or partner', 'Other family member', 'Friend', 'Case manager', 'Myself', 'Other'] as $relationship)
                            <option value="{{ $relationship }}" @selected(old('relationship_to_resident') === $relationship)>{{ $relationship }}</option>
                        @endforeach
                    </select>
                    @error('relationship_to_resident') <p class="mt-1 text-xs text-clay-700">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="care_needed" class="mb-1.5 block text-sm font-bold text-navy-900 dark:text-cream-100">Type of care needed</label>
                    <select id="care_needed" name="care_needed"
                            class="w-full rounded-lg border border-cream-300 bg-white px-4 py-2.5 text-sm text-navy-900 dark:text-cream-100 focus:border-navy-500 focus:outline-none focus:ring-2 focus:ring-navy-200 dark:border-night-600 dark:bg-night-800 dark:focus:border-navy-400 dark:focus:ring-night-600">
                        <option value="" @selected(old('care_needed') === '')>Select one&hellip;</option>
                        @foreach (['Long-term residential care', 'Daily living support', 'Personal care assistance', 'Not sure yet'] as $care)
                            <option value="{{ $care }}" @selected(old('care_needed') === $care)>{{ $care }}</option>
                        @endforeach
                    </select>
                    @error('care_needed') <p class="mt-1 text-xs text-clay-700">{{ $message }}</p> @enderror
                </div>

                <div class="sm:col-span-2">
                    <label for="message" class="mb-1.5 block text-sm font-bold text-navy-900 dark:text-cream-100">Message <span class="text-clay-600">*</span></label>
                    <textarea id="message" name="message" rows="5" required
                              placeholder="Tell us a little about your loved one and the care you're looking for."
                              class="w-full rounded-lg border border-cream-300 bg-white px-4 py-2.5 text-sm text-navy-900 dark:text-cream-100 focus:border-navy-500 focus:outline-none focus:ring-2 focus:ring-navy-200 dark:border-night-600 dark:bg-night-800 dark:focus:border-navy-400 dark:focus:ring-night-600">{{ old('message') }}</textarea>
                    @error('message') <p class="mt-1 text-xs text-clay-700">{{ $message }}</p> @enderror
                </div>

                <div class="sm:col-span-2">
                    <button type="submit" class="btn btn-primary w-full sm:w-auto">
                        Send Message
                        <svg class="btn-arrow h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
