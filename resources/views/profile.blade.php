<x-layout>
    {{-- Tambahkan Alpine --}}
    <script src="//unpkg.com/alpinejs" defer></script>

    {{-- Bagian Profil --}}
    <section class="pt-40 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-row z-10 gap-15 items-center">
            <img src="user.jpeg" alt="" class="rounded-4xl object-cover">
            <div class="flex flex-col gap-10">
                <div class="flex flex-col">
                    <h1 class="font-bold text-3xl mb-3 text-shadow-lg lg:text-6xl md:text-5xl">Nama GE Ranger</h1>
                    <h1 class="font-regular text-l md:text-xl">Domisili</h1>
                    <h1 class="font-regular text-l md:text-xl">email</h1>
                </div>
                <div class="flex flex-col gap-5">
                    <h1 class="font-medium text-l md:text-2xl">Lencana GE Ranger</h1>
                    <div class="flex flex-row gap-2 w-10 md:w-20">
                        <img src="tanisampah.svg" alt="">
                        <img src="tanisampah.svg" alt="">
                        <img src="tanisampah.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Bagian Kegiatan --}}
    <section x-data="{ filter: 'all' }" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- Tombol Filter --}}
        <div class="flex flex-row gap-3 mt-15">
            <button @click="filter = 'all'" :class="filter === 'all' ? 'bg-hijau text-putih' : ''"
                class="shadow-2xl border px-3 py-1 rounded-3xl font-regular border-hijau hover:bg-hijau hover:text-putih">
                Semua Kegiatan
            </button>
            <button @click="filter = 'berlangsung'" :class="filter === 'berlangsung' ? 'bg-hijau text-putih' : ''"
                class="shadow-2xl border px-3 py-1 rounded-3xl font-regular border-hijau hover:bg-hijau hover:text-putih">
                Berlangsung
            </button>
            <button @click="filter = 'selesai'" :class="filter === 'selesai' ? 'bg-hijau text-putih' : ''"
                class="shadow-2xl border px-3 py-1 rounded-3xl font-regular border-hijau hover:bg-hijau hover:text-putih">
                Selesai
            </button>
        </div>

        <h1 class="text-5xl font-bold my-10 mt-5">Volunteer yang diikuti</h1>

        {{-- Daftar Card --}}
        <div class="flex flex-col gap-10 my-10">
            <div x-show="filter === 'all' || filter === 'berlangsung'">
                <x-card status="berlangsung"></x-card>
            </div>
            <div x-show="filter === 'all' || filter === 'selesai'">
                <x-card status="selesai"></x-card>
            </div>
            <div x-show="filter === 'all' || filter === 'berlangsung'">
                <x-card status="berlangsung"></x-card>
            </div>
        </div>
    </section>
</x-layout>
