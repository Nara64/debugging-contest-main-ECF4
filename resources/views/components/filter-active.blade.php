@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center px-1 pt-1 rounded-full shadow-md shadow-black text-sm font-medium leading-5 transition duration-150 ease-in-out hover:scale-125'
: 'inline-flex items-center px-1 pt-1 rounded-full shadow-md shadow-transparent text-sm font-medium leading-5 text-gray-500 hover:scale-125 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
