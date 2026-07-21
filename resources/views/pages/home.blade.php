@extends('layouts.app')

@section('title', config('site.name').' | Adult Family Home in Tacoma, WA')
@section('meta_description', 'St. Michaels Adult Family Home LLC provides compassionate adult family home care in Tacoma, WA. Contact us to learn about availability, services, and scheduling a visit.')

@section('content')

{{-- Hero --}}
<section class="relative overflow-hidden bg-cream-50 dark:bg-night-900">
    {{-- Decorative concentric arcs --}}
    <svg class="pointer-events-none absolute -right-40 -top-40 h-[34rem] w-[34rem] text-navy-200/40 dark:text-night-600" viewBox="0 0 400 400" fill="none" aria-hidden="true">
        <circle cx="200" cy="200" r="120" stroke="currentColor"/>
        <circle cx="200" cy="200" r="160" stroke="currentColor"/>
        <circle cx="200" cy="200" r="199" stroke="currentColor"/>
    </svg>

    <div class="relative z-10 mx-auto grid max-w-6xl items-center gap-16 px-4 py-16 sm:px-6 lg:grid-cols-[1.1fr_1fr] lg:py-24">
        <div data-animate class="space-y-7">
            <p class="flex items-center gap-3 text-xs font-bold uppercase tracking-[0.28em] text-clay-600">
                <span class="h-px w-8 bg-clay-500/50" aria-hidden="true"></span>
                Adult Family Home &middot; Tacoma, Washington
            </p>
            <h1 class="font-display text-4xl font-semibold leading-[1.08] tracking-tight text-navy-900 dark:text-cream-100 text-balance sm:text-5xl lg:text-[3.4rem]">
                <span class="relative inline-block italic text-navy-700 dark:text-navy-300">
                    Compassionate
                    <svg class="swash absolute -bottom-3 left-0 w-full" viewBox="0 0 300 16" fill="none" aria-hidden="true" preserveAspectRatio="none">
                        <path d="M6 11 C 70 4, 150 14, 294 7" pathLength="1" stroke="currentColor" stroke-width="4" stroke-linecap="round" class="text-clay-500/60"/>
                    </svg>
                </span>
                adult family home care in Tacoma, WA
            </h1>
            <p class="max-w-xl leading-relaxed text-pretty">
                St. Michaels Adult Family Home LLC provides a safe, comfortable, and supportive home environment
                for adults who need daily care, supervision, and personal support. Our goal is to help every
                resident feel respected, cared for, and at home.
            </p>
            <div class="flex flex-col gap-3 sm:flex-row">
                <a href="{{ route('contact') }}" class="btn btn-primary">
                    Schedule a Visit
                    <svg class="btn-arrow h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
                <a href="tel:{{ config('site.phone_href') }}" class="btn btn-outline">
                    Call {{ config('site.phone') }}
                </a>
            </div>
            {{-- Trust chips --}}
            <ul class="flex flex-wrap gap-1.5">
                @foreach (['Real photos of our home', 'Quiet Tacoma neighborhood', 'Handrails & safe layout'] as $chip)
                    <li class="inline-flex items-center gap-1.5 whitespace-nowrap rounded-md border border-cream-300 bg-white/80 px-2.5 py-1.5 text-xs font-semibold text-navy-800 dark:border-night-600 dark:bg-night-800/70 dark:text-cream-200">
                        <svg class="h-3.5 w-3.5 text-clay-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                        {{ $chip }}
                    </li>
                @endforeach
            </ul>

            <p class="flex items-center gap-2 text-sm text-stone-500 dark:text-navy-400">
                <svg class="h-4 w-4 text-clay-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                {{ config('site.address.street') }}, {{ config('site.address.city') }}, {{ config('site.address.state') }} {{ config('site.address.zip') }}
            </p>
        </div>

        <div data-animate class="relative mx-auto w-full max-w-md" style="--stagger: 150ms">
            <div class="relative">
                {{-- Arched photo slideshow with hairline frame --}}
                <div class="photo-frame photo-warm overflow-hidden rounded-t-full rounded-b-xl">
                    <div class="relative aspect-[4/5] w-full">
                        <img src="{{ asset('images/1.jpeg') }}"
                             alt="The front entrance of St. Michaels Adult Family Home with railings along the steps"
                             class="h-full w-full object-cover object-[52%_50%]"
                             fetchpriority="high">
                        <img src="{{ asset('images/5.jpeg') }}"
                             alt="A resident enjoying the shared living room"
                             class="hero-slide h-full w-full object-cover" style="animation-delay: 6s">
                        <img src="{{ asset('images/2.jpeg') }}"
                             alt="The family dining table beside the back doors"
                             class="hero-slide h-full w-full object-cover" style="animation-delay: 12s">
                        <img src="{{ asset('images/7.jpeg') }}"
                             alt="The bathroom with support rails beside the toilet and bathtub"
                             class="hero-slide h-full w-full object-cover" style="animation-delay: 18s">
                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-navy-950/10 via-transparent to-white/15" aria-hidden="true"></div>
                    </div>
                </div>

                {{-- Rotating circular text stamp --}}
                <div class="absolute -right-4 top-8 flex h-27 w-27 items-center justify-center rounded-full border border-cream-200 bg-white/90 shadow-[0_15px_35px_-15px_rgb(18_41_74_/_0.3)] backdrop-blur dark:border-night-600 dark:bg-night-800/90 sm:-right-8" aria-hidden="true">
                    <svg class="stamp-spin absolute inset-0 h-full w-full" viewBox="0 0 100 100">
                        <defs>
                            <path id="stamp-circle" d="M 50,50 m -37,0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0"/>
                        </defs>
                        <text class="fill-navy-800 text-[7.6px] font-bold uppercase tracking-[0.16em] dark:fill-cream-200">
                            <textPath href="#stamp-circle">St. Michaels Adult Family Home &middot; Tacoma, WA &middot;</textPath>
                        </text>
                    </svg>
                    <img src="{{ asset('logo/logo-2.png') }}" alt="" class="h-9 w-9 object-contain">
                </div>

                {{-- Floating tagline card --}}
                <figure class="absolute -bottom-2 -left-4 max-w-[16rem] rounded-xl border border-cream-200 bg-white dark:border-night-700 dark:bg-night-800 p-5 shadow-[0_25px_50px_-20px_rgb(18_41_74_/_0.3)] sm:-left-10">
                    <span class="mb-3 block h-px w-8 bg-clay-500/60" aria-hidden="true"></span>
                    <blockquote class="font-display text-sm font-medium italic leading-relaxed text-navy-800 dark:text-cream-200">
                        &ldquo;{{ config('site.tagline') }}&rdquo;
                    </blockquote>
                </figure>

            </div>

            {{-- Slideshow captions + progress dots --}}
            <div class="mt-7 flex items-center justify-end gap-4">
                <div class="flex items-center gap-2" aria-hidden="true">
                    <span class="hero-dot"></span>
                    <span class="hero-dot" style="animation-delay: 6s"></span>
                    <span class="hero-dot" style="animation-delay: 12s"></span>
                    <span class="hero-dot" style="animation-delay: 18s"></span>
                </div>
                <p class="relative h-5 w-52 text-right font-display text-sm italic text-stone-500 dark:text-navy-400">
                    <span class="hero-caption">The entrance to our home</span>
                    <span class="hero-caption" style="animation-delay: 6s">The shared living room</span>
                    <span class="hero-caption" style="animation-delay: 12s">Family-style dining</span>
                    <span class="hero-caption" style="animation-delay: 18s">Bathroom support rails</span>
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Three-beat strap --}}
<section class="border-y border-cream-200 bg-white dark:border-night-700 dark:bg-night-950">
    <p data-animate class="mx-auto flex max-w-6xl flex-wrap items-center justify-center gap-x-5 gap-y-2 px-4 py-10 text-center font-display text-2xl font-medium italic tracking-tight text-navy-800 dark:text-cream-200 sm:gap-x-7 sm:text-3xl">
        Safe.
        <span class="h-1.5 w-1.5 rounded-full bg-clay-500/70" aria-hidden="true"></span>
        Comfortable.
        <span class="h-1.5 w-1.5 rounded-full bg-clay-500/70" aria-hidden="true"></span>
        Cared for.
    </p>
</section>

{{-- Welcome --}}
<section class="bg-white dark:bg-night-950">
    <div class="mx-auto grid max-w-6xl items-center gap-12 px-4 py-16 sm:px-6 lg:grid-cols-2 lg:py-24">
        <div data-animate class="relative order-last lg:order-first">
            <div class="photo-frame photo-warm group overflow-hidden rounded-xl">
                <img src="{{ asset('images/5.jpeg') }}"
                     alt="A resident relaxing in the shared living room"
                     class="aspect-[4/3] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.04]"
                     loading="lazy">
            </div>
        </div>
        <div class="space-y-5">
            <x-section-heading
                align="left"
                eyebrow="Welcome"
                title="Welcome to St. Michaels Adult Family Home" />
            <p class="leading-relaxed">
                Choosing care for a loved one is an important decision. At St. Michaels Adult Family Home,
                we provide support in a peaceful residential setting where residents receive daily assistance
                while maintaining dignity, comfort, and a sense of belonging.
            </p>
            <p class="leading-relaxed">
                Our home is built around compassion, respect, and dependable support. We focus on understanding
                each resident&rsquo;s needs and creating a comfortable routine that helps them feel secure and valued.
            </p>
            <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-sm font-bold text-navy-800 hover:text-clay-600 dark:text-cream-200 dark:hover:text-clay-500">
                Learn more about us
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- Services preview --}}
<section class="bg-cream-50 dark:bg-night-900">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:py-24">
        <x-section-heading
            eyebrow="What We Offer"
            title="Care and support designed around each resident"
            lead="Every resident is different. We take time to understand daily routines, preferences, and care needs, then support each person accordingly." />

        <div data-animate-children class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <x-service-card icon="hands" title="Personal Care Assistance">
                Respectful support with bathing, grooming, dressing, and hygiene based on each resident&rsquo;s needs.
            </x-service-card>
            <x-service-card icon="sun" title="Daily Living Support">
                Help with routines, mobility, and daily comfort so every day feels steady and familiar.
            </x-service-card>
            <x-service-card icon="pill" title="Medication Assistance">
                Support with medication routines and reminders according to each resident&rsquo;s care needs.
            </x-service-card>
            <x-service-card icon="meal" title="Meals &amp; Nutrition">
                Nutritious home-cooked meals served together in a warm, family-style dining room.
            </x-service-card>
            <x-service-card icon="shield" title="Safety &amp; Supervision">
                Ongoing attention and a safe home layout that helps residents remain secure and comfortable.
            </x-service-card>
            <x-service-card icon="chat" title="Companionship &amp; Activities">
                Friendly conversation, encouragement, and everyday moments shared like family.
            </x-service-card>
        </div>

        <div class="mt-10 text-center">
            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-sm font-bold text-navy-800 hover:text-clay-600 dark:text-cream-200 dark:hover:text-clay-500">
                See all services
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- Why choose us --}}
<section class="bg-white dark:bg-night-950">
    <div class="mx-auto grid max-w-6xl items-center gap-12 px-4 py-16 sm:px-6 lg:grid-cols-2 lg:py-24">
        <div class="space-y-5">
            <x-section-heading
                align="left"
                eyebrow="Why Families Choose Us"
                title="A real home, not an institution" />
            <ul data-animate-children class="space-y-4">
                @foreach ([
                    ['Home-like environment', 'A quiet residential house in Tacoma — shared meals, familiar rooms, and a front door that feels like home.'],
                    ['Personalized attention', 'A small setting means care is shaped around each resident, not a schedule.'],
                    ['Safe and supportive', 'Handrails, supervision, and a layout designed for daily comfort and security.'],
                    ['Family communication', 'We keep families informed and involved in the care process, every step of the way.'],
                ] as [$point, $detail])
                    <li class="flex gap-4">
                        <span class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-navy-100 text-navy-800 dark:bg-night-700 dark:text-cream-200">
                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                        </span>
                        <div>
                            <h3 class="font-display text-lg font-semibold text-navy-900 dark:text-cream-100">{{ $point }}</h3>
                            <p class="text-sm leading-relaxed text-stone-600 dark:text-navy-300">{{ $detail }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div data-animate-children class="grid grid-cols-2 gap-4">
            <div class="group overflow-hidden rounded-t-3xl rounded-b-[5rem]">
                <img src="{{ asset('images/2.jpeg') }}" alt="The family-style dining table with seating for shared meals"
                     class="aspect-[3/4] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.05]" loading="lazy">
            </div>
            <div class="group mt-10 overflow-hidden rounded-t-[5rem] rounded-b-3xl">
                <img src="{{ asset('images/7.jpeg') }}" alt="Bathroom support rails beside the toilet and bathtub"
                     class="aspect-[3/4] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.05]" loading="lazy">
            </div>
        </div>
    </div>
</section>

{{-- Steps to care --}}
<section class="texture-dots bg-navy-950">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:py-24">
        <div data-animate class="mx-auto max-w-2xl text-center">
            <p class="mb-4 flex items-center justify-center gap-3 text-xs font-bold uppercase tracking-[0.28em] text-clay-500">
                <span class="h-px w-8 bg-clay-500/50" aria-hidden="true"></span>
                Steps to Care
                <span class="h-px w-8 bg-clay-500/50" aria-hidden="true"></span>
            </p>
            <h2 class="font-display text-3xl font-semibold tracking-tight text-white text-balance sm:text-4xl">
                Your steps to finding <span class="italic text-cream-200">the right care</span>
            </h2>
        </div>

        <ol data-animate-children class="mt-16 grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['Contact Us', 'Call or send a message to ask questions and discuss your loved one\'s needs.'],
                ['Schedule a Visit', 'Visit the home, meet the caregivers, and see the environment in person.'],
                ['Discuss Care Needs', 'We learn about the resident\'s routine, health needs, and preferences.'],
                ['Plan the Move-In', 'When the home is a good fit, we make the transition smooth and comfortable.'],
            ] as $index => [$step, $detail])
                <li class="relative">
                    <span class="font-display text-6xl font-semibold italic text-navy-700 dark:text-navy-300/80">{{ sprintf('%02d', $index + 1) }}</span>
                    <span class="mt-4 block h-px w-10 bg-clay-500/60" aria-hidden="true"></span>
                    <h3 class="mt-4 font-display text-xl font-semibold text-white">{{ $step }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-navy-200">{{ $detail }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>

{{-- Testimonials --}}
{{--
    PLACEHOLDER QUOTES: replace with real feedback from families (with their
    permission) before promoting the site. Keep attributions generic until then.
--}}
<section class="bg-white dark:bg-night-950">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:py-24">
        <x-section-heading
            eyebrow="What Families Say"
            title="Trusted by the families we serve"
            lead="The kind words below reflect what we hear from families — and what we work to earn every single day." />

        <div data-animate-children class="mt-12 grid gap-6 md:grid-cols-3">
            @foreach ([
                ['My mother is treated like family here. The home is clean, calm, and she always looks comfortable and well cared for when we visit.', 'Daughter of a resident'],
                ['They keep us informed about everything and answer every question with patience. It gave our whole family peace of mind.', 'Family member'],
                ['A real home with caring people. The shared meals and the quiet neighborhood made all the difference for my uncle.', 'Nephew of a resident'],
            ] as [$quote, $attribution])
                <figure class="flex flex-col rounded-xl border border-cream-200 bg-cream-50 dark:border-night-700 dark:bg-night-900 p-8">
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-clay-600">Family feedback</p>
                    <span class="mt-4 font-display text-5xl leading-none text-clay-500/60" aria-hidden="true">&ldquo;</span>
                    <blockquote class="mt-3 grow font-display text-base font-medium italic leading-relaxed text-navy-800 dark:text-cream-200">
                        {{ $quote }}
                    </blockquote>
                    <figcaption class="mt-6 flex items-center gap-3 text-sm">
                        <span class="h-px w-8 bg-clay-500/60" aria-hidden="true"></span>
                        <span class="font-bold text-navy-900 dark:text-cream-100">{{ $attribution }}</span>
                    </figcaption>
                </figure>
            @endforeach
        </div>
    </div>
</section>

{{-- Gallery preview --}}
<section class="bg-cream-50 dark:bg-night-900">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:py-24">
        <x-section-heading
            eyebrow="Our Home"
            title="A comfortable place to call home"
            lead="Real photos of the home — see the living spaces, dining area, and the quiet Tacoma neighborhood we call home." />

        <div data-animate-children class="mt-12 grid grid-cols-2 gap-4 lg:grid-cols-4">
            @foreach ([
                ['5.jpeg', 'A resident relaxing in the shared living room'],
                ['2.jpeg', 'The family dining table set for shared meals'],
                ['1.jpeg', 'The front entrance with railings along the steps'],
                ['7.jpeg', 'Bathroom support rails for daily safety'],
            ] as [$image, $alt])
                <div @class(['photo-warm group overflow-hidden rounded-xl', 'lg:mt-8' => $loop->iteration % 2 === 0])>
                    <img src="{{ asset('images/'.$image) }}" alt="{{ $alt }}"
                         class="aspect-square w-full object-cover transition duration-700 ease-out group-hover:scale-[1.06]" loading="lazy">
                </div>
            @endforeach
        </div>

        <div class="mt-12 text-center">
            <a href="{{ route('our-home') }}" class="btn btn-primary">
                Tour Our Home
                <svg class="btn-arrow h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- FAQ preview --}}
<section class="bg-white dark:bg-night-950">
    <div class="mx-auto max-w-3xl px-4 py-16 sm:px-6 lg:py-24">
        <x-section-heading
            eyebrow="Common Questions"
            title="Questions families often ask" />

        <div data-animate-children class="mt-10 space-y-4">
            <x-faq-item question="What is an adult family home?" open>
                An adult family home is a residential home that provides care, supervision, and support for adults
                who need assistance with daily living — in a smaller, home-like setting rather than a large facility.
            </x-faq-item>
            <x-faq-item question="How do I know if this is right for my loved one?">
                The best way is to talk with us. Call {{ config('site.phone') }} and tell us about your loved
                one&rsquo;s needs — we&rsquo;ll answer honestly and help you decide if our home is a good fit.
            </x-faq-item>
            <x-faq-item question="Can I schedule a visit?">
                Yes. Families are always encouraged to visit, see the home in person, and meet the caregivers
                before making any decision.
            </x-faq-item>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('faqs') }}" class="inline-flex items-center gap-2 text-sm font-bold text-navy-800 hover:text-clay-600 dark:text-cream-200 dark:hover:text-clay-500">
                Read all FAQs
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>

@include('partials.cta')

@endsection
