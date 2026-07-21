<footer class="border-t-2 border-clay-600/60 bg-navy-950 text-navy-200">
    <div class="mx-auto grid max-w-6xl gap-10 px-4 py-16 sm:px-6 md:grid-cols-2 lg:grid-cols-4">
        <div class="space-y-4">
            <p class="flex items-center gap-3">
                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-cream-100 p-1.5">
                    <img src="{{ asset('logo/logo-2.png') }}" alt="" class="h-full w-full object-contain">
                </span>
                <span class="font-display text-xl font-semibold leading-tight text-white">St. Michaels<br>Adult Family Home</span>
            </p>
            <p class="text-sm leading-relaxed">
                A residential adult family home in Tacoma, Washington, providing compassionate daily care
                in a safe, comfortable, home-like environment.
            </p>
        </div>

        <div>
            <h2 class="mb-4 text-xs font-bold uppercase tracking-[0.2em] text-clay-500">Visit</h2>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-white">About Us</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-white">Services</a></li>
            </ul>
        </div>

        <div>
            <h2 class="mb-4 text-xs font-bold uppercase tracking-[0.2em] text-clay-500">Learn</h2>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('our-home') }}" class="hover:text-white">Our Home</a></li>
                <li><a href="{{ route('faqs') }}" class="hover:text-white">FAQs</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white">Contact</a></li>
            </ul>
        </div>

        <div>
            <h2 class="mb-4 text-xs font-bold uppercase tracking-[0.2em] text-clay-500">Contact</h2>
            <ul class="space-y-3 text-sm">
                <li>
                    <a href="{{ config('site.map_link') }}" target="_blank" rel="noopener" class="hover:text-white">
                        {{ config('site.address.street') }}<br>
                        {{ config('site.address.city') }}, {{ config('site.address.state') }} {{ config('site.address.zip') }}
                    </a>
                </li>
                <li><a href="tel:{{ config('site.phone_href') }}" class="hover:text-white">{{ config('site.phone') }}</a></li>
                <li><a href="mailto:{{ config('site.email') }}" class="hover:text-white">{{ config('site.email') }}</a></li>
            </ul>
        </div>
    </div>

    <div class="border-t border-navy-800">
        <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-3 px-4 py-5 text-center text-xs text-navy-300 sm:flex-row sm:px-6 sm:text-left">
            <p>&copy; {{ date('Y') }} {{ config('site.name') }}. All rights reserved.</p>
            <div class="space-y-1 sm:text-right">
                <p>{{ config('site.tagline') }}</p>
                <p>
                    Designed &amp; built by
                    <a href="https://www.techibytesmedia.com/"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="font-semibold text-cream-200 underline decoration-clay-500/60 underline-offset-4 transition-colors hover:text-white">
                        Techibytes Media LLC
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>
