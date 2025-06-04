<!DOCTYPE html>
<html lang="en" class="h-full bg-[#F7F7F7]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById("search-form");
            const input = document.getElementById("search-input");
            const cards = document.querySelectorAll(".educard-item");

            form.addEventListener("submit", function(e) {
                e.preventDefault(); // Biar nggak reload halaman

                const keyword = input.value.toLowerCase();

                cards.forEach(card => {
                    const title = card.querySelector("h1")?.textContent.toLowerCase() || '';
                    const desc = card.querySelector("p")?.textContent.toLowerCase() || '';

                    const match = title.includes(keyword) || desc.includes(keyword);

                    card.style.display = match ? "block" : "none";
                });
            });

            // Opsional: filter langsung saat ngetik
            input.addEventListener("input", function() {
                const keyword = input.value.toLowerCase();

                cards.forEach(card => {
                    const title = card.querySelector("h1")?.textContent.toLowerCase() || '';
                    const desc = card.querySelector("p")?.textContent.toLowerCase() || '';

                    const match = title.includes(keyword) || desc.includes(keyword);

                    card.style.display = match ? "block" : "none";
                });
            });
        });
    </script>

    <title></title>
</head>

<body class="h-full overflow-x-hidden">
    <div class="min-h-full flex flex-col">
        <x-navbar></x-navbar>
        <main class="flex-1">
            {{ $slot }}
        </main>
        <x-footer></x-footer>
    </div>
</body>

</html>
