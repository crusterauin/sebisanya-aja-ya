@props(['href' => null])

@php
    $classes =
        'bg-hijau border hover:bg-putih hover:text-hijau hover:border text-white font-bold py-2 px-4 rounded ease-in-out duration-100';
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
