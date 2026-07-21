@extends('layouts.app')

@section('title', 'FAQs | '.config('site.name'))
@section('meta_description', 'Answers to common questions about St. Michaels Adult Family Home in Tacoma, WA — what an adult family home is, services offered, visits, care plans, and how to get in touch.')

@section('content')

@include('partials.page-header', [
    'eyebrow' => 'FAQs',
    'title' => 'Frequently asked <span class="italic text-navy-700 dark:text-navy-300">questions</span>',
    'intro' => 'Choosing care comes with a lot of questions — that\'s normal. Here are the ones families ask most often. If yours isn\'t answered here, just call us.',
])

<section class="bg-white dark:bg-night-950">
    <div data-animate-children class="mx-auto max-w-3xl space-y-4 px-4 py-16 sm:px-6 lg:py-24">
        <x-faq-item question="What is an adult family home?" open>
            An adult family home is a residential home that provides care, supervision, and support for adults
            who need assistance with daily living, in a smaller home-like setting. Residents live in a real
            house with shared meals, familiar spaces, and caregivers who know them personally.
        </x-faq-item>

        <x-faq-item question="Where is St. Michaels Adult Family Home located?">
            We are located at {{ config('site.address.street') }}, {{ config('site.address.city') }},
            {{ config('site.address.state') }} {{ config('site.address.zip') }} — a quiet residential
            neighborhood in Tacoma.
        </x-faq-item>

        <x-faq-item question="How can I contact the home?">
            You can call <a href="tel:{{ config('site.phone_href') }}" class="font-bold text-navy-800 hover:text-clay-600 dark:text-cream-200 dark:hover:text-clay-500">{{ config('site.phone') }}</a>
            or email <a href="mailto:{{ config('site.email') }}" class="font-bold text-navy-800 hover:text-clay-600 dark:text-cream-200 dark:hover:text-clay-500">{{ config('site.email') }}</a>.
            You can also use the form on our <a href="{{ route('contact') }}" class="font-bold text-navy-800 hover:text-clay-600 dark:text-cream-200 dark:hover:text-clay-500">contact page</a>.
        </x-faq-item>

        <x-faq-item question="Can I schedule a visit?">
            Yes. Families are encouraged to call and schedule a visit to learn more about the home, meet the
            caregivers, and see the available care options in person.
        </x-faq-item>

        <x-faq-item question="What services are offered?">
            Services include personal care support, daily living assistance, medication assistance and
            reminders, home-cooked meals, supervision, companionship, housekeeping and laundry support,
            and ongoing family communication. See the full list on our
            <a href="{{ route('services') }}" class="font-bold text-navy-800 hover:text-clay-600 dark:text-cream-200 dark:hover:text-clay-500">services page</a>.
        </x-faq-item>

        <x-faq-item question="Do you provide care plans?">
            Care is based on each resident&rsquo;s needs. Before move-in, we take time to learn about the
            resident&rsquo;s daily routine, health needs, and preferences so their support fits them from
            the first day.
        </x-faq-item>

        <x-faq-item question="Is this a nursing home?">
            No. An adult family home is a smaller residential setting compared to a large nursing home.
            It is designed to feel like a family home — because it is one.
        </x-faq-item>
    </div>
</section>

@include('partials.cta', [
    'heading' => 'Still have questions?',
    'text' => 'Call '.config('site.phone').' and ask us anything — we\'re happy to help you understand your options.',
])

@endsection
