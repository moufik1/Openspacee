@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dar-mode:bg-gray-700 dar-mode:hover:bg-gray-600 dar-mode:focus:bg-gray-600 dar-mode:focus:text-white dar-mode:hover:text-white dar-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline'
            : 'block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dar-mode:bg-transparent dar-mode:hover:bg-gray-600 dar-mode:focus:bg-gray-600 dar-mode:focus:text-white dar-mode:hover:text-white dar-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
