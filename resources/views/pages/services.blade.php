@extends('layouts.app')

@section('title', 'Services | '.config('site.name'))
@section('meta_description', 'Adult family home services in Tacoma, WA: personal care, daily living support, medication assistance, meals, safety and supervision, companionship, housekeeping, and family communication.')

@section('content')

@include('partials.page-header', [
    'eyebrow' => 'Services',
    'title' => 'Care and support for <span class="italic text-navy-700 dark:text-navy-300">daily living</span>',
    'intro' => 'We provide dependable, respectful support shaped around each resident\'s needs. Below are the services offered at St. Michaels Adult Family Home.',
])

{{-- Services grid --}}
<section class="bg-white dark:bg-night-950">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:py-24">
        <div data-animate-children class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <x-service-card icon="hands" title="Personal Care Assistance">
                Support with bathing, grooming, dressing, and hygiene, always provided with patience and
                respect for each resident&rsquo;s privacy and preferences.
            </x-service-card>
            <x-service-card icon="sun" title="Daily Living Support">
                Help with daily routines, mobility support, and the small moments of comfort that make
                each day feel steady and familiar.
            </x-service-card>
            <x-service-card icon="pill" title="Medication Assistance &amp; Reminders">
                Support with medication routines according to each resident&rsquo;s care needs and applicable
                care guidelines.
            </x-service-card>
            <x-service-card icon="meal" title="Meal Support">
                Nutritious, home-cooked meals served in our family-style dining room, with attention to
                dietary needs and preferences.
            </x-service-card>
            <x-service-card icon="shield" title="Safety &amp; Supervision">
                Ongoing supervision and a safe home layout — including handrails and accessible spaces —
                that help residents remain safe and comfortable.
            </x-service-card>
            <x-service-card icon="chat" title="Companionship">
                Friendly interaction, conversation, encouragement, and emotional support — residents are
                part of the household, never just occupants.
            </x-service-card>
            <x-service-card icon="sparkle" title="Housekeeping &amp; Laundry">
                Clean and comfortable living spaces with regular housekeeping and laundry support included.
            </x-service-card>
            <x-service-card icon="chat" title="Family Communication">
                We keep families informed and involved in the care process, so you always know how your
                loved one is doing.
            </x-service-card>
            <x-service-card icon="home" title="Long-Term Residential Care">
                A stable, consistent home for adults who need ongoing daily care in a residential setting.
            </x-service-card>
        </div>

        <div data-animate class="mx-auto mt-16 max-w-3xl rounded-lg border border-cream-200 bg-cream-100 dark:border-night-700 dark:bg-night-800 p-10 text-center">
            <h2 class="font-display text-2xl font-semibold text-navy-900 dark:text-cream-100">Not sure what level of care your loved one needs?</h2>
            <p class="mt-3 leading-relaxed">
                Every situation is different. Call us at
                <a href="tel:{{ config('site.phone_href') }}" class="font-bold text-navy-800 hover:text-clay-600 dark:text-cream-200 dark:hover:text-clay-500">{{ config('site.phone') }}</a>
                and we&rsquo;ll talk through your loved one&rsquo;s needs together — no pressure, just honest answers.
            </p>
        </div>
    </div>
</section>

@include('partials.cta')

@endsection
