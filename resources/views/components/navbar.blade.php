<nav class="bg-transparent backdrop-blur-md fixed w-full z-50" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <a href="/" class="inline-flex items-center">
                <img class="size-8" src="tanisampah.svg" alt="TANISAMPAH">
                <span class="text-hitam text-2xl font-bold p-2">GESTIFY</span>
            </a>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link>
                    <x-nav-link href="/edukasi" :active="request()->is('edukasi')">Edukasi</x-nav-link>
                    <x-nav-link href="/volunteer" :active="request()->is('volunteer')">Volunteer</x-nav-link>
                    <x-nav-link href="/sponsorship" :active="request()->is('sponsorship')">Sponsorship</x-nav-link>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button type="button" @click="isOpen= !isOpen"
                    class="relative inline-flex items-center justify-center rounded-md bg-hijau p-2 text-putih hover:bg-putih hover:text-hijau  focus:outline-hidden"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
            <a href="/" class="block rounded-md bg-hijau px-3 py-2 text-base font-medium text-hitam"
                aria-current="page">Beranda</a>
            <a href="/edukasi"
                class="block rounded-md px-3 py-2 text-base font-medium text-hitam hover:bg-gray-700 hover:text-white">Edukasi</a>
            <a href="/volunteer"
                class="block rounded-md px-3 py-2 text-base font-medium text-hitam hover:bg-gray-700 hover:text-white">Volunteer</a>
        </div>
    </div>
</nav>
