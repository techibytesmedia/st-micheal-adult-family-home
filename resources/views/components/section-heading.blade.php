@props([
    'eyebrow' => null,
    'title',
    'lead' => null,
    'align' => 'center',
])

<div data-animate {{ $attributes->class(['max-w-2xl', 'mx-auto text-center' => $align === 'center']) }}>
    @if ($eyebrow)
        <p @class([
            'mb-4 flex items-center gap-3 text-xs font-bold uppercase tracking-[0.28em] text-clay-600',
            'justify-center' => $align === 'center',
        ])>
            @if ($align === 'center')
                <span class="h-px w-8 bg-clay-500/50" aria-hidden="true"></span>
            @endif
            {{ $eyebrow }}
            <span class="h-px w-8 bg-clay-500/50" aria-hidden="true"></span>
        </p>
    @endif
    <h2 class="font-display text-3xl font-semibold tracking-tight text-navy-900 text-balance dark:text-cream-100 sm:text-4xl">{{ $title }}</h2>
    @if ($lead)
        <p class="mt-4 leading-relaxed text-stone-600 text-pretty dark:text-navy-300">{{ $lead }}</p>
    @endif
</div>
