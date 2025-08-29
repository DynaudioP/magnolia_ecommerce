<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Magnolia | Home</title>
</head>

<body>
    <div class="min-h-screen bg-[#25777a]">
        <nav class="flex justify-between items-center mx-auto py-2 px-12">
            <div>
                <img class="w-32 cursor-pointer" src="{{ asset('assets/images/logo.png') }}" alt="...">
            </div>
            <div>
                <ul>
                    <li class="flex space-x-7">
                        <a href="" class="text-white font-bold">
                            About Us
                        </a>
                        <a href="" class="text-white font-bold">
                            Katalog
                        </a>
                        <a href="" class="text-white font-bold">
                            Find Your Style
                        </a>
                        <a href="" class="text-white font-bold">
                            Keranjang
                        </a>
                        <a href="" class="text-white font-bold">
                            Pesanan
                        </a>
                    </li>
                </ul>
            </div>
            <div class="px-5 py-2 bg-white mr-3 rounded-xl">
                <a href="/login" class="font-bold text-[#36A4A9]">Masuk</a>
            </div>
        </nav>
        <header class=" w-full mt-5">
            <div x-data="{
                activeSlide: 1,
                slides: [1, 2, 3],
                interval: null,
                startAutoplay() {
                    this.interval = setInterval(() => {
                        this.activeSlide = this.activeSlide === this.slides.length ? 1 : this.activeSlide + 1;
                    }, 3000);
                },
                stopAutoplay() {
                    clearInterval(this.interval);
                    this.interval = null;
                }
            }" x-init="startAutoplay()" @mouseenter="stopAutoplay()"
                @mouseleave="startAutoplay()"
                class="w-5/6 relative mx-auto h-64 md:h-96 overflow-hidden rounded-xl shadow-lg">

                <!-- Slides -->
                <template x-for="slide in slides" :key="slide">
                    <div class="absolute inset-0 w-full h-full transition-opacity duration-700"
                        :class="{ 'opacity-100 z-10': activeSlide === slide, 'opacity-0 z-0': activeSlide !== slide }">
                        <img :src="`{{ asset('assets/images') }}/home-carousel${slide}.png`"
                            class="w-full h-full object-cover" alt="Slide Image">
                    </div>
                </template>

                <!-- Prev Button -->
                <button @click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1"
                    class="absolute top-1/2 left-4 -translate-y-1/2 bg-white/70 p-2 rounded-full shadow hover:bg-white z-20">
                    ‹
                </button>

                <!-- Next Button -->
                <button @click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1"
                    class="absolute top-1/2 right-4 -translate-y-1/2 bg-white/70 p-2 rounded-full shadow hover:bg-white z-20">
                    ›
                </button>

                <!-- Indicators -->
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2 z-20">
                    <template x-for="slide in slides" :key="slide">
                        <button @click="activeSlide = slide" class="w-3 h-3 rounded-full transition"
                            :class="activeSlide === slide ? 'bg-gray-800' : 'bg-white'"></button>
                    </template>
                </div>
            </div>
        </header>
        <section class="px-4 lg:px-32 mt-10">
            <div class="px-8 py-5 bg-white rounded-2xl">
                <h3 class="font-bold text-2xl">Rekomendasi</h3>
                <div class="flex flex-row flex-wrap mt-7 gap-3 justify-start">
                    <div class="card bg-white rounded-xl border border-gray-200 shadow rounded-md">
                        <div class="w-68  rounded-t-lg">
                            <img class="rounded-t-lg" src="{{ asset('assets/images/catalog1.jpg') }}" alt="">
                        </div>
                        <div class="p-3">
                            <h5 class="mb-2 text-sm text-gray-400">Batik</h5>
                            <h3 class="font-bold text-md mb-0.5">Kain Batik Khas Solo</h3>

                            <h3 class="font-bold  text-md mb-1">Rp. 200.000,-</h3>
                        </div>
                    </div>
                    <div class="card bg-white rounded-xl border border-gray-200 shadow rounded-md">
                        <div class="w-72  rounded-t-lg">
                            <img class="rounded-t-lg" src="{{ asset('assets/images/catalog1.jpg') }}" alt="">
                        </div>
                        <div class="p-3">
                            <h5 class="mb-2 text-sm text-gray-400">Batik</h5>
                            <h3 class="font-bold text-md mb-0.5">Kain Batik Khas Solo</h3>

                            <h3 class="font-bold  text-md mb-1">Rp. 200.000,-</h3>
                        </div>

                    </div>
                    <div class="card bg-white rounded-xl border border-gray-200 shadow rounded-md">
                        <div class="w-72  rounded-t-lg">
                            <img class="rounded-t-lg" src="{{ asset('assets/images/catalog1.jpg') }}" alt="">
                        </div>
                        <div class="p-3">
                            <h5 class="mb-2 text-sm text-gray-400">Batik</h5>
                            <h3 class="font-bold text-md mb-0.5">Kain Batik Khas Solo</h3>

                            <h3 class="font-bold  text-md mb-1">Rp. 200.000,-</h3>
                        </div>

                    </div>

                    <div class="card bg-white rounded-xl border border-gray-200 shadow rounded-md">
                        <div class="w-72  rounded-t-lg">
                            <img class="rounded-t-lg" src="{{ asset('assets/images/catalog1.jpg') }}" alt="">
                        </div>
                        <div class="p-3">
                            <h5 class="mb-2 text-sm text-gray-400">Batik</h5>
                            <h3 class="font-bold text-md mb-0.5">Kain Batik Khas Solo</h3>

                            <h3 class="font-bold  text-md mb-1">Rp. 200.000,-</h3>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <footer>

        </footer>
    </div>
</body>

</html>
