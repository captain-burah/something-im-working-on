@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-indigo-400 tracking-wide text-xs xl:text-xl text-center font-bold leading-5 text-white transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-transparent tracking-wide text-xs xl:text-xl text-center font-bold leading-5 text-white hover:underline focus:outline-none transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
