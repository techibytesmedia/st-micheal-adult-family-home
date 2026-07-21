{{-- Top contact bar --}}
<div class="bg-navy-950 text-cream-100">
    <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-center gap-x-6 gap-y-1 px-4 py-2 text-sm sm:justify-between sm:px-6">
        <div class="flex flex-wrap items-center justify-center gap-x-6 gap-y-1">
            <a href="tel:{{ config('site.phone_href') }}" class="hidden items-center gap-2 hover:text-white sm:flex">
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/></svg>
                <span>Call us today: <span class="font-semibold">{{ config('site.phone') }}</span></span>
            </a>
            <p class="flex items-center gap-1.5 text-[0.8rem] text-cream-100 sm:hidden">
                <svg class="h-3.5 w-3.5 shrink-0 text-clay-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"/>
                </svg>
                {{ config('site.tagline_alt') }}
            </p>
            <a href="mailto:{{ config('site.email') }}" class="hidden items-center gap-2 hover:text-white sm:flex">
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                {{ config('site.email') }}
            </a>
        </div>
        <p class="hidden items-center gap-2 lg:flex">
            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
            {{ config('site.address.street') }}, {{ config('site.address.city') }}, {{ config('site.address.state') }} {{ config('site.address.zip') }}
        </p>
    </div>
</div>

{{-- Main navigation --}}
<header class="sticky top-0 z-40 border-b border-cream-200 bg-white/95 backdrop-blur dark:border-night-700 dark:bg-night-950/90">
    <div class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-4 py-4 sm:px-6">
        <a href="{{ route('home') }}" class="shrink-0 transition-opacity hover:opacity-80">
            <img src="{{ asset('logo/logo-1.png') }}"
                 alt="{{ config('site.name') }}"
                 class="h-11 w-auto sm:h-12">
        </a>

        <nav class="hidden items-center gap-7 text-sm font-semibold text-navy-800 dark:text-cream-200 lg:flex" aria-label="Main">
            @foreach ([
                'home' => 'Home',
                'about' => 'About Us',
                'services' => 'Services',
                'our-home' => 'Our Home',
                'faqs' => 'FAQs',
                'contact' => 'Contact',
            ] as $routeName => $label)
                <a href="{{ route($routeName) }}"
                   @class(['nav-link transition-colors hover:text-navy-950 dark:hover:text-white', 'is-active text-navy-950 dark:text-white' => request()->routeIs($routeName)])>
                    {{ $label }}
                </a>
            @endforeach
        </nav>

        <div class="flex items-center gap-3">
            <a href="{{ route('contact') }}" class="btn btn-primary hidden !px-5 !py-2.5 sm:inline-flex">
                Schedule a Visit
            </a>
            <button id="nav-toggle" type="button" aria-expanded="false" aria-controls="mobile-nav"
                    class="rounded-md p-2 text-navy-800 hover:bg-cream-100 dark:text-cream-200 dark:hover:bg-night-800 lg:hidden">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/></svg>
            </button>
        </div>
    </div>

    <nav id="mobile-nav" class="hidden border-t border-cream-200 bg-white dark:border-night-700 dark:bg-night-950 lg:hidden" aria-label="Mobile">
        <div class="space-y-1 px-4 py-4 text-sm font-semibold text-navy-800 dark:text-cream-200">
            <a href="{{ route('home') }}" class="block rounded-md px-3 py-2 hover:bg-cream-100 dark:hover:bg-night-800">Home</a>
            <a href="{{ route('about') }}" class="block rounded-md px-3 py-2 hover:bg-cream-100 dark:hover:bg-night-800">About Us</a>
            <a href="{{ route('services') }}" class="block rounded-md px-3 py-2 hover:bg-cream-100 dark:hover:bg-night-800">Services</a>
            <a href="{{ route('our-home') }}" class="block rounded-md px-3 py-2 hover:bg-cream-100 dark:hover:bg-night-800">Our Home</a>
            <a href="{{ route('faqs') }}" class="block rounded-md px-3 py-2 hover:bg-cream-100 dark:hover:bg-night-800">FAQs</a>
            <a href="{{ route('contact') }}" class="block rounded-md px-3 py-2 hover:bg-cream-100 dark:hover:bg-night-800">Contact</a>
            <a href="{{ route('contact') }}" class="mt-2 block rounded-lg bg-navy-800 px-5 py-2.5 text-center text-white hover:bg-navy-700">
                Schedule a Visit
            </a>
        </div>
    </nav>
</header>
