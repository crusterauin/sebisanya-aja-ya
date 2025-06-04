<form id="search-form" class="max-w-full">
    <label for="search-input" class="sr-only">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <!-- SVG ikon search -->
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-4.35-4.35M10.5 18a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15z" />
            </svg>
        </div>
        <input type="search" id="search-input"
            class="block w-full p-4 ps-10 border border-gray-300 rounded-lg bg-gray-50 text-xl hover:border-hijau"
            placeholder="{{ $slot }}" autocomplete="off" />
    </div>
</form>
