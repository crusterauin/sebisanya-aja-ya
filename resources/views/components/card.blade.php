@props([
    'href' => '#',
    'img' => '',
    'judul' => '',
    'subJudul' => '',
    'deskripsi' => '',
    'waktu' => '',
    'lokasi' => '',
])

<a href="{{ $href }}"
    class="mx-auto max-w-7xl z-10 flex flex-col shadow-sm hover:shadow-2xl ease-in-out duration-100 bg-hijau rounded-lg overflow-hidden">

    <!-- Gambar Header -->
    <div class="relative w-full h-100">
        <img class="object-cover w-full h-full" src="{{ $img }}" alt="{{ $judul }}">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="absolute bottom-0 left-0 pl-7 pb-7 text-shadow-lg">
            <h2 class="text-xl font-regular text-white">{{ $subJudul }}</h2>
            <h1 class="text-5xl font-bold text-white">{{ $judul }}</h1>
        </div>
    </div>

    <!-- Konten Detail -->
    <div class="relative flex flex-row items-start justify-between px-7 py-5">
        <div class="flex flex-col text-putih space-y-2 text-shadow-lg">
            <p class="text-base">{{ $deskripsi }}</p>
            <p class="font-regular text-xs md:text-sm">🕒 {{ $waktu }}</p>
            <p class="text-xs md:text-sm font-regular">📍 {{ $lokasi }}</p>
        </div>

        <!-- Tombol Daftar -->
        <div class="absolute right-7 bottom-7">
            <x-button>Daftar</x-button>
        </div>
    </div>
</a>
