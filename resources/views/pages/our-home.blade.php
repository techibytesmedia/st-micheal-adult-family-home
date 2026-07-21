@extends('layouts.app')

@section('title', 'Our Home | '.config('site.name'))
@section('meta_description', 'Tour St. Michaels Adult Family Home in Tacoma, WA — see the living areas, dining room, and safe, comfortable spaces where residents receive daily care in a real home.')

@section('content')

@include('partials.page-header', [
    'eyebrow' => 'Our Home',
    'title' => 'A comfortable place to call <span class="italic text-navy-700 dark:text-navy-300">home</span>',
    'intro' => 'St. Michaels Adult Family Home offers a peaceful residential setting where residents receive daily care while enjoying the comfort of a real home. These are real photos of our house in Tacoma — no stock photography.',
])

{{-- Living area --}}
<section class="bg-white dark:bg-night-950">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6">
        <x-section-heading align="left" eyebrow="Living Area" title="A shared living room that feels like family" />
        <div data-animate-children class="mt-8 grid gap-4 sm:grid-cols-2">
            <div class="photo-warm group overflow-hidden rounded-xl">
                <img src="{{ asset('images/5.jpeg') }}" alt="A resident relaxing in the shared living room"
                     class="aspect-[4/3] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.05]" loading="lazy">
            </div>
            <div class="photo-warm group overflow-hidden rounded-xl">
                <img src="{{ asset('images/4.jpeg') }}" alt="The shared living room and adjoining dining area"
                     class="aspect-[4/3] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.05]" loading="lazy">
            </div>
        </div>
    </div>
</section>

{{-- Dining --}}
<section class="bg-white dark:bg-night-950">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6">
        <x-section-heading align="left" eyebrow="Dining &amp; Kitchen" title="Meals prepared and shared at home" />
        <div data-animate-children class="mt-8 grid gap-4 sm:grid-cols-2">
            <div class="photo-warm group overflow-hidden rounded-xl">
                <img src="{{ asset('images/2.jpeg') }}" alt="The dining table with seating for shared meals"
                     class="aspect-[4/3] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.05]" loading="lazy">
            </div>
            <div class="photo-warm group overflow-hidden rounded-xl">
                <img src="{{ asset('images/8.jpeg') }}" alt="The kitchen with wood cabinets and everyday appliances"
                     class="aspect-[4/3] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.05]" loading="lazy">
            </div>
        </div>
    </div>
</section>

{{-- Exterior --}}
<section class="bg-white dark:bg-night-950">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6">
        <x-section-heading align="left" eyebrow="Exterior &amp; Entrance" title="A residential home in Tacoma" />
        <div data-animate-children class="mt-8 grid gap-4 sm:grid-cols-3">
            <div class="photo-warm group overflow-hidden rounded-xl sm:col-span-2">
                <img src="{{ asset('images/6.jpeg') }}" alt="Full exterior view of St. Michaels Adult Family Home"
                     class="aspect-[4/3] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.05] sm:aspect-auto sm:h-full" loading="lazy">
            </div>
            <div class="grid gap-4">
                <div class="photo-warm group overflow-hidden rounded-xl">
                    <img src="{{ asset('images/1.jpeg') }}" alt="The front steps and entrance railings"
                         class="aspect-[4/3] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.05]" loading="lazy">
                </div>
                <div class="photo-warm group overflow-hidden rounded-xl">
                    <img src="{{ asset('images/3.jpeg') }}" alt="The open front door welcoming visitors into the home"
                         class="aspect-[4/3] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.05]" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Safety --}}
<section class="bg-white dark:bg-night-950">
    <div class="mx-auto max-w-6xl px-4 pb-16 pt-16 sm:px-6">
        <x-section-heading align="left" eyebrow="Bathroom Safety" title="Support where daily routines happen" />
        <div data-animate-children class="mt-8 grid items-center gap-8 sm:grid-cols-[1.2fr_0.8fr]">
            <div class="photo-warm group overflow-hidden rounded-xl">
                <img src="{{ asset('images/7.jpeg') }}" alt="Bathroom with support rails beside the toilet and bathtub"
                     class="aspect-[4/3] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.05]" loading="lazy">
            </div>
            <div class="space-y-4">
                <h3 class="font-display text-2xl font-semibold text-navy-900 dark:text-cream-100">Practical support built into the room</h3>
                <p class="leading-relaxed">
                    Support rails beside the toilet and bathtub help make personal-care routines steadier and more comfortable.
                    During a visit, families can see the bathroom setup and discuss the support their loved one needs.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Facility highlights --}}
<section class="bg-cream-50 dark:bg-night-900">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:py-24">
        <x-section-heading
            eyebrow="Highlights"
            title="What you'll find here" />
        <ul data-animate-children class="mx-auto mt-10 grid max-w-4xl gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ([
                'Comfortable bedrooms',
                'Shared living area',
                'Family-style dining space',
                'Handrails and safe walkways',
                'Quiet residential setting',
                'Located in Tacoma, WA',
            ] as $highlight)
                <li class="flex items-center gap-3 rounded-xl border border-cream-200 bg-white dark:border-night-700 dark:bg-night-800 px-5 py-4">
                    <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-navy-100 text-navy-800 dark:bg-night-700 dark:text-cream-200">
                        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                    </span>
                    <span class="text-sm font-semibold text-navy-900 dark:text-cream-100">{{ $highlight }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</section>

@include('partials.cta', [
    'heading' => 'Schedule a visit and see the home in person.',
    'text' => 'Photos help, but nothing replaces walking through the door. Call us to arrange a visit that works for your family.',
])

@endsection
