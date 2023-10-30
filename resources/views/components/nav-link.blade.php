@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-0 space-x-8 pt-1 border-indigo-400 text-xs xl:text-xl md:text-base text-center  leading-5 text-black transition duration-150 ease-in-out'
            : 'inline-flex items-center px-0 space-x-8 pt-1 border-transparent text-xs xl:text-xl md:text-base text-center  leading-5 text-black hover:underline focus:outline-none  transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
