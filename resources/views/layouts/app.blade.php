<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light">
    <meta name="theme-color" content="#214c87">

    <title>@yield('title', config('site.name').' | Adult Family Home in Tacoma, WA')</title>
    <meta name="description" content="@yield('meta_description', 'St. Michaels Adult Family Home LLC provides compassionate adult family home care in Tacoma, WA. Contact us to learn about availability, services, and scheduling a visit.')">

    <meta property="og:site_name" content="{{ config('site.name') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', config('site.name').' | Adult Family Home in Tacoma, WA')">
    <meta property="og:description" content="@yield('meta_description', 'St. Michaels Adult Family Home LLC provides compassionate adult family home care in Tacoma, WA. Contact us to learn about availability, services, and scheduling a visit.')">
    <meta property="og:image" content="{{ asset('images/6.jpeg') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}?v=2">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}?v=2">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}?v=2">

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "{{ config('site.name') }}",
        "description": "Adult family home providing compassionate residential care in Tacoma, Washington.",
        "telephone": "{{ config('site.phone_href') }}",
        "email": "{{ config('site.email') }}",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('logo/logo-1.png') }}",
        "image": "{{ asset('images/6.jpeg') }}",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "{{ config('site.address.street') }}",
            "addressLocality": "{{ config('site.address.city') }}",
            "addressRegion": "{{ config('site.address.state') }}",
            "postalCode": "{{ config('site.address.zip') }}",
            "addressCountry": "US"
        }
    }
    </script>
</head>
<body class="bg-white pb-16 font-sans text-stone-600 antialiased dark:bg-night-950 dark:text-navy-300 lg:pb-0">

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <div id="mobile-cta-bar" class="fixed inset-x-0 bottom-0 z-50 h-16 translate-y-full border-t border-cream-200 bg-white/95 px-4 py-3 shadow-[0_-12px_30px_-20px_rgb(18_41_74_/_0.45)] backdrop-blur transition-transform duration-300 dark:border-night-700 dark:bg-night-950/95 lg:hidden">
        <div class="mx-auto grid max-w-md grid-cols-2 gap-3">
            <a href="tel:{{ config('site.phone_href') }}" class="btn btn-primary !px-3 !py-2.5 text-xs">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/></svg>
                Call Now
            </a>
            <a href="{{ route('contact') }}" class="btn btn-outline !px-3 !py-2.5 text-xs">
                Schedule Visit
            </a>
        </div>
    </div>

    <script>
        const navToggle = document.getElementById('nav-toggle');
        const mobileNav = document.getElementById('mobile-nav');

        navToggle?.addEventListener('click', () => {
            const isOpen = !mobileNav.classList.toggle('hidden');
            navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
    </script>
</body>
</html>
