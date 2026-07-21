/*
 *
 *   Created by Techibytes Media Development Team
 *   Copyright Ⓒ 2026. All rights reserved, https://techibytesmedia.com/
 *   Project: st-michaels-afh
 *   Last modified: 7/9/26, 6:02 PM
 *   Modified or Created by: erigb
 *
 *   Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file
 *   except in compliance with the License. You may obtain a copy of the License at
 *   https://www.apache.org/licenses/LICENSE-2.0. Unless required by applicable law or agreed to in writing, software
 *    distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND,
 *    either express or implied. See the License for the specific language governing permissions and
 *    limitations under the License.
 * /
 */

/*
 * Scroll-reveal animations.
 *
 * Elements with [data-animate], and direct children of [data-animate-children],
 * fade up gently when they enter the viewport. The `js-animate` class on <html>
 * scopes the initial hidden state so content stays visible if JS never runs,
 * and users who prefer reduced motion see everything immediately.
 */
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

// Soft shadow under the sticky header once the page scrolls
const header = document.querySelector('header');
if (header) {
    const updateHeaderShadow = () => {
        header.classList.toggle('shadow-[0_8px_30px_-12px_rgb(18_41_74_/_0.15)]', window.scrollY > 8);
    };
    updateHeaderShadow();
    window.addEventListener('scroll', updateHeaderShadow, { passive: true });
}

// Mobile call-to-action bar: slides up only after the hero scrolls out of view
const ctaBar = document.getElementById('mobile-cta-bar');
if (ctaBar) {
    const hero = document.querySelector('main section');
    const toggleCtaBar = (show) => ctaBar.classList.toggle('translate-y-full', !show);

    if (hero && 'IntersectionObserver' in window) {
        new IntersectionObserver(
            ([entry]) => toggleCtaBar(!entry.isIntersecting),
            { rootMargin: '-120px 0px 0px 0px' },
        ).observe(hero);
    } else {
        const onCtaScroll = () => toggleCtaBar(window.scrollY > 600);
        onCtaScroll();
        window.addEventListener('scroll', onCtaScroll, { passive: true });
    }
}

const targets = [
    ...document.querySelectorAll('[data-animate]'),
    ...document.querySelectorAll('[data-animate-children] > *'),
];

if (!prefersReducedMotion && 'IntersectionObserver' in window && targets.length > 0) {
    document.documentElement.classList.add('js-animate');

    // Stagger siblings inside animated groups so grids cascade in.
    document.querySelectorAll('[data-animate-children]').forEach((group) => {
        [...group.children].forEach((child, index) => {
            child.style.setProperty('--stagger', `${Math.min(index, 5) * 90}ms`);
        });
    });

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.15, rootMargin: '0px 0px -40px 0px' },
    );

    targets.forEach((el) => observer.observe(el));
}
