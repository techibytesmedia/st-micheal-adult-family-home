@extends('layouts.app')

@section('title', 'About Us | '.config('site.name'))
@section('meta_description', 'St. Michaels Adult Family Home LLC is a residential care home in Tacoma, WA providing a peaceful, supportive environment where residents receive care, respect, and daily assistance.')

@section('content')

@include('partials.page-header', [
    'eyebrow' => 'About Us',
    'title' => 'About <span class="italic text-navy-700 dark:text-navy-300">St. Michaels</span> Adult Family Home',
    'intro' => 'St. Michaels Adult Family Home LLC is a residential care home located in Tacoma, Washington. We provide a peaceful and supportive environment where residents receive care, respect, and daily assistance in a home-like setting.',
])

{{-- Mission --}}
<section class="bg-white dark:bg-night-950">
    <div class="mx-auto grid max-w-6xl items-center gap-12 px-4 py-16 sm:px-6 lg:grid-cols-2 lg:py-24">
        <div class="space-y-5">
            <x-section-heading
                align="left"
                eyebrow="Our Mission"
                title="Care that honors every resident" />
            <p class="leading-relaxed">
                Our mission is to provide compassionate, dependable, and respectful care for adults who need
                support with daily living. We believe every resident deserves to feel safe, valued, and
                comfortable in the place they call home.
            </p>
            <p class="leading-relaxed">
                We are not a large institution. We are a home — with shared meals at the family table,
                familiar faces, and caregivers who take time to know each resident personally.
            </p>
        </div>
        <div data-animate class="photo-frame photo-warm group overflow-hidden rounded-xl">
            <img src="{{ asset('images/5.jpeg') }}"
                 alt="A resident relaxing comfortably in the shared living room"
                 class="aspect-[4/3] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.04]" loading="lazy">
        </div>
    </div>
</section>

{{-- Values --}}
<section class="bg-cream-50 dark:bg-night-900">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:py-24">
        <x-section-heading
            eyebrow="Our Values"
            title="What guides our care every day" />

        <div data-animate-children class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['Compassion', 'We care for each resident the way we would care for our own family.'],
                ['Respect &amp; Dignity', 'Every person is treated with patience, kindness, and dignity.'],
                ['Safety &amp; Trust', 'A secure home and dependable routines families can count on.'],
                ['Family Communication', 'Families stay informed and involved in the care process.'],
            ] as [$value, $detail])
                <div class="rounded-lg border border-cream-200 bg-white dark:border-night-700 dark:bg-night-800 p-8 text-center transition duration-300 hover:-translate-y-1 hover:border-navy-200 hover:shadow-[0_18px_40px_-24px_rgb(18_41_74_/_0.28)] motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                    <span class="mx-auto mb-4 block h-px w-8 bg-clay-500/60" aria-hidden="true"></span>
                    <h3 class="font-display text-lg font-semibold text-navy-900 dark:text-cream-100">{!! $value !!}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-stone-600 dark:text-navy-300">{{ $detail }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Our home + who we serve --}}
<section class="bg-white dark:bg-night-950">
    <div class="mx-auto grid max-w-6xl items-center gap-12 px-4 py-16 sm:px-6 lg:grid-cols-2 lg:py-24">
        <div data-animate class="photo-frame group order-last overflow-hidden rounded-t-[6rem] rounded-b-3xl lg:order-first">
            <img src="{{ asset('images/2.jpeg') }}"
                 alt="The dining table where residents share home-cooked meals"
                 class="aspect-[4/3] w-full object-cover transition duration-700 ease-out group-hover:scale-[1.04]" loading="lazy">
        </div>
        <div class="space-y-8">
            <div class="space-y-4">
                <x-section-heading
                    align="left"
                    eyebrow="Our Home"
                    title="Comfortable, peaceful, and personal" />
                <p class="leading-relaxed">
                    Our home is designed to feel comfortable and personal — not like a large institution.
                    Residents enjoy a shared living room, a family dining area, comfortable bedrooms, and a
                    quiet residential neighborhood in Tacoma.
                </p>
            </div>
            <div class="space-y-4">
                <h2 class="font-display text-2xl font-semibold text-navy-900 dark:text-cream-100">Who we serve</h2>
                <p class="leading-relaxed">
                    We serve adults who need daily support, supervision, companionship, and assistance with
                    activities of daily living. Before move-in, we take time to learn about each resident&rsquo;s
                    routine, health needs, and preferences so care fits the person from day one.
                </p>
            </div>
        </div>
    </div>
</section>

@include('partials.cta', [
    'heading' => 'Have questions about care or availability?',
    'text' => 'Call us today at '.config('site.phone').' — we are happy to talk through your loved one\'s needs.',
])

@endsection
