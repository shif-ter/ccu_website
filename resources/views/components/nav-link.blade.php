@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-3 text-sm font-righteous leading-5 text-secondary focus:outline-none transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-3 text-sm font-righteous leading-5 text-white hover:text-secondary focus:outline-none transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
