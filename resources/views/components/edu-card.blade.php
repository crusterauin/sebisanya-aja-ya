@props([
    'href' => '#',
    'img' => '',
    'judul' => '',
    'deskripsi' => '',
])

@php
    $classes = 'educard-item my-10 flex flex-col gap-y-10';
    $cardClasses =
        'flex flex-col sm:flex-row border-1 border-gray-300 hover:border-hijau hover:shadow-2xl ease-in-out duration-100';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    <div class="{{ $cardClasses }}">
        <img src="{{ $img }}" alt="{{ $judul }}" class="object-cover h-75 w-full">
        <div class="mx-7">
            <h1 class="font-bold text-xl mt-5 mb-10">{{ $judul }}</h1>
            <p class="text-sm lg:text-lg pb-3 text-justify">{{ $deskripsi }}</p>
        </div>
    </div>
</a>
