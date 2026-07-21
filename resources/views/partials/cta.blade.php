<section class="texture-dots bg-navy-900">
    <div data-animate class="mx-auto flex max-w-6xl flex-col items-center gap-8 px-4 py-20 text-center sm:px-6 lg:flex-row lg:justify-between lg:text-left">
        <div class="max-w-2xl space-y-4">
            <h2 class="font-display text-3xl font-semibold tracking-tight text-white text-balance sm:text-4xl">
                {{ $heading ?? 'Looking for a safe and caring home for your loved one?' }}
            </h2>
            <p class="leading-relaxed text-navy-200 text-pretty">
                {{ $text ?? 'Call St. Michaels Adult Family Home today, or send us a message to ask about availability and schedule a visit.' }}
            </p>
        </div>
        <div class="flex shrink-0 flex-col gap-3 sm:flex-row">
            <a href="tel:{{ config('site.phone_href') }}" class="btn btn-light">
                Call {{ config('site.phone') }}
            </a>
            <a href="{{ route('contact') }}" class="btn btn-outline-light">
                Send a Message
                <svg class="btn-arrow h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</section>
