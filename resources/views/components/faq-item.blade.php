@props([
    'question',
    'open' => false,
])

<details {{ $attributes->class(['group rounded-lg border border-cream-200 bg-white transition-colors open:border-navy-200 open:shadow-[0_15px_35px_-25px_rgb(18_41_74_/_0.3)] dark:border-night-700 dark:bg-night-800 dark:open:border-night-500']) }} @if($open) open @endif>
    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-6 py-5 font-display text-lg font-semibold text-navy-900 dark:text-cream-100 [&::-webkit-details-marker]:hidden">
        {{ $question }}
        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-cream-300 text-clay-600 transition duration-300 group-open:rotate-45 group-open:border-navy-300 group-open:bg-navy-800 group-open:text-cream-100 dark:border-night-600 dark:text-clay-500 dark:group-open:border-cream-200 dark:group-open:bg-cream-100 dark:group-open:text-navy-800" aria-hidden="true">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
            </svg>
        </span>
    </summary>
    <div class="px-6 pb-6 text-sm leading-relaxed text-stone-600 dark:text-navy-300">
        {{ $slot }}
    </div>
</details>
