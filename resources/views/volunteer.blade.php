<x-layout>
    <section x-data="{ filter: 'all' }" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 z-10 mt-20">
        <div class="flex flex-col items-center">
            <h1 class="text-4xl font-bold mt-10 sm:text-5xl text-center">Ikuti Volunteer Sekarang!</h1>
            <div class="flex flex-row gap-3 mt-5">
                <button @click="filter = 'all'"
                    :class="filter === 'all' ? 'bg-hijau text-putih' : 'ease-in-out duration-100'"
                    class="shadow-2xl border px-3 py-1 rounded-3xl text-xs sm:text-base font-regular border-hijau hover:bg-hijau hover:text-putih">
                    Semua Kegiatan
                </button>
                <button @click="filter = 'berlangsung'"
                    :class="filter === 'berlangsung' ? 'bg-hijau text-putih' : 'ease-in-out duration-100'"
                    class="shadow-2xl border px-3 py-1 rounded-3xl font-regular border-hijau hover:bg-hijau hover:text-putih">
                    Berlangsung
                </button>
                <button @click="filter = 'selesai'"
                    :class="filter === 'selesai' ? 'bg-hijau text-putih' : 'ease-in-out duration-100'"
                    class="shadow-2xl border px-3 py-1 rounded-3xl font-regular border-hijau hover:bg-hijau hover:text-putih">
                    Selesai
                </button>
            </div>
        </div>
        <div class="my-10 flex flex-col gap-y-10">
            <div x-show="filter === 'all' || filter === 'berlangsung'">
                <x-card href="/daftar1" img="daurUlangArtikel.jpg" judul="GESTIFY ReLearn"
                    subJudul="Learn. Sort. Recycle. Inspire."
                    deskripsi="Belajar memilah sampah, teknik daur ulang, dan teknologi hijau terbaru"
                    waktu="Sabtu, 9 Juli 2025" lokasi="Tebet Eco Park" status="berlangsung"></x-card>
            </div>
            <div x-show="filter === 'all' || filter === 'selesai'">
                <x-card href="/daftar2" img="komposArtikel.jpg" judul="GESTIFY ReCompose"
                    subJudul="ReCompose it for future" deskripsi="Mengolah pupuk kompos bersama."
                    waktu="Sabtu, 13 Januari 2025" lokasi="Kandang Sapi Jatinegara" status="selesai"></x-card>
            </div>
            <div x-show="filter === 'all' || filter === 'berlangsung'">
                <x-card href="/daftar3" img="sampahArtikel.jpg" judul="GESTIFY TakeIt"
                    subJudul="Take the trash, Rangers!" deskripsi="Pungut sampah, lingkungan bersih!"
                    waktu="Minggu, 30 Agustus 2025" lokasi="Pasar Jatinegara" status="berlangsung"></x-card>
            </div>
        </div>
    </section>
</x-layout>
