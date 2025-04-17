@props(['active'])

@php
$classes = ($active ?? false)
            ? ' px-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-black focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : '  px-1  border-b-2 border-transparent text-sm font-medium leading-5 text-black hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
