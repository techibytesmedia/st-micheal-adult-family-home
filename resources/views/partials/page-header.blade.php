{{--
    Shared inner-page header band.
    Expects: $eyebrow (string), $title (HTML-safe string), $intro (optional string).
--}}
<section class="relative overflow-hidden bg-cream-50 dark:bg-night-900">
    <svg class="pointer-events-none absolute -right-32 -top-44 h-96 w-96 text-navy-200/40 dark:text-night-600" viewBox="0 0 400 400" fill="none" aria-hidden="true">
        <circle cx="200" cy="200" r="120" stroke="currentColor"/>
        <circle cx="200" cy="200" r="160" stroke="currentColor"/>
        <circle cx="200" cy="200" r="199" stroke="currentColor"/>
    </svg>

    <div class="relative mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:py-20">
        <div data-animate class="max-w-3xl">
            <p class="mb-4 flex items-center gap-3 text-xs font-bold uppercase tracking-[0.28em] text-clay-600">
                <span class="h-px w-8 bg-clay-500/50" aria-hidden="true"></span>
                {{ $eyebrow }}
            </p>
            <h1 class="font-display text-4xl font-semibold tracking-tight text-navy-900 text-balance dark:text-cream-100 sm:text-5xl">{!! $title !!}</h1>
            @isset($intro)
                <p class="mt-5 max-w-2xl leading-relaxed text-pretty">{{ $intro }}</p>
            @endisset
        </div>
    </div>
</section>
