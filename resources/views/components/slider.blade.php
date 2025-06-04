<div class="relative w-full overflow-hidden shadow-lg mx-auto mt-16">
    <!-- Slides -->
    <div id="slider" class="flex transition-transform duration-700 ease-in-out">
        <div class="min-w-full h-150 bg-cover bg-center" style="background-image: url('peduli.png');">
            <div class="h-full w-full bg-black/30 flex items-center justify-center">
                <h2 class="text-white text-xl md:text-3xl lg:text-5xl font-bold text-center">“Peduli hari ini selamatkan
                    hari
                    esok”</h2>
            </div>
        </div>
        <div class="min-w-full h-150 bg-cover bg-center" style="background-image: url('langkah.png');">
            <div class="h-full w-full bg-black/30 flex items-center justify-center">
                <h2 class="text-white text-xl md:text-3xl lg:text-5xl font-bold text-center">“Satu langkah kecil
                    perubahan besar
                    untuk bumi”
                </h2>
            </div>
        </div>
        <div class="min-w-full h-150 bg-cover bg-center" style="background-image: url('kelola.png');">
            <div class="h-full w-full bg-black/30 flex items-center justify-center">
                <h2 class="text-white text-xl md:text-3xl lg:text-5xl font-bold text-center">“Kelola sampahmu selamatkan
                    masa
                    depanmu”</h2>
            </div>
        </div>
    </div>


    <button onclick="prevSlide()"
        class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white/30 hover:bg-white/50 text-white font-bold rounded-full p-2">
        ❮
    </button>
    <button onclick="nextSlide()"
        class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white/30 hover:bg-white/50 text-white font-bold rounded-full p-2">
        ❯
    </button>

    <div id="dots" class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">

    </div>
</div>



<script>
    let currentSlide = 0;
    const slider = document.getElementById("slider");
    const totalSlides = slider.children.length;
    const dotsContainer = document.getElementById("dots");

    // Generate dot buttons
    for (let i = 0; i < totalSlides; i++) {
        const dot = document.createElement("button");
        dot.className = "w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-colors";
        dot.setAttribute("aria-label", "Go to slide " + (i + 1));
        dot.addEventListener("click", () => showSlide(i));
        dotsContainer.appendChild(dot);
    }

    const dots = dotsContainer.querySelectorAll("button");

    function updateSlide() {
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
        dots.forEach((dot, i) => {
            dot.classList.toggle("bg-white", i === currentSlide);
            dot.classList.toggle("bg-white/50", i !== currentSlide);
        });
    }

    function showSlide(index) {
        currentSlide = index;
        updateSlide();
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlide();
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlide();
    }

    // Optional auto-slide
    setInterval(nextSlide, 10000);

    // Init
    updateSlide();
</script>
