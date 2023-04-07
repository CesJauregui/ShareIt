@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-3 border-indigo-400 text-base font-medium text-white-600 bg-white focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out hover:text-gray-800'
            : 'block pl-3 pr-4 py-3 border-l-4 border-transparent text-base text-black font-medium text-gray-600 hover:text-gray-800 hover:bg-white hover:border-gray-900 focus:outline-none focus:text-indigo-700 focus:bg-white focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
