@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center text-center px-1 pt-1 border-indigo-400 lg:text-base text-xs font-bold leading-5 text-black transition duration-150 ease-in-out'
            : 'inline-flex items-center text-center px-1 pt-1 border-transparent lg:text-base text-xs font-bold leading-5 text-black hover:underline focus:outline-none  transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
