<x-layouts.user>

    {{-- Header Carousel --}}
    <header class="lg:px-10 px-2 bg-gray-50">

        <div>
            <h3 class="py-8 font-serif font-semibold text-gray-500">
                Home > <span class="text-black"> Find Your Style</span>
            </h3>
        </div>

        <div class="relative w-full h-64 md:h-96 overflow-hidden rounded-4xl shadow-lg" x-data="{ activeSlide: 1, slides: [1, 2, 3], autoplay() { setInterval(() => { this.activeSlide = this.activeSlide === this.slides.length ? 1 : this.activeSlide + 1 }, 3000) } }"
            x-init="autoplay()">

            <div class="absolute inset-y-0 left-0 flex items-center z-10 px-8">
                <div class="text-white max-w-md">
                    <h2 class="text-3xl md:text-5xl font-bold text-[#ddb135] [text-shadow:_2px_2px_0_#000] font-serif">
                        Find Your Style</h2>
                    <p class="mt-4 text-sm md:text-lg drop-shadow-md font-serif [text-shadow:_2px_2px_0_#000]">
                        Temukan Gaya Baru dan Tingkatkan Tampilan Anda!
                    </p>
                    {{-- <button class="mt-6 px-5 py-2 bg-black text-white rounded-lg shadow-md hover:bg-gray-800">
                        Shop Now
                    </button> --}}
                </div>
            </div>
            <template x-for="slide in slides" :key="slide">
                <div x-show="activeSlide === slide" x-transition.opacity class="absolute inset-0 w-full h-full">
                    <img :src="`{{ asset('assets/images') }}/home-carousel${slide}.png`"
                        class="w-full h-full object-cover" alt="Slide Image">
                </div>
            </template>
        </div>
    </header>



    {{-- Bagian Section Product --}}
    <section class="mx-auto px-2 md:px-10 py-20 bg-gray-50 font-serif">
        <div class="grid grid-cols-1 lg:grid-cols-[300px_1fr] items-start gap-6">
            {{-- Sisi kIri Grid Filter Produk --}}
            <form class="px-4 py-2 rounded-xl border border-gray-300 shadow-[0_4px_20px_rgba(0,0,0,0.06)]">
                <h3 class="font-bold text-lg">Filter Products</h3>
                <div class="flex flex-col my-3 px-2">
                    <div class="flex items-center justify-between">
                        <h5 class="font-semibold">Kategori</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div class="flex flex-col space-y-2 p-2">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500 text-md">Batik</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500">Kebaya</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between">
                        <h5 class="font-semibold">Material</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div class="flex flex-col space-y-2 p-2">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500">Kain</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500">Katun</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500">Sutra</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between">
                        <h5 class="font-semibold">Teknik</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div class="flex flex-col space-y-2 p-2">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500">Canting Tulis</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500">Celup Ikat</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500">Cap</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500">Printing</span>
                        </label>
                    </div>

                    <div class="flex justify-end mt-2">
                        <button
                            class="px-6 py-2 hover:scale-103 cursor-pointer transition rounded-lg font-semibold text-white 
 bg-gradient-to-r from-[#25777a] to-[#164345] shadow-md">
                            Filter
                        </button>
                    </div>
                </div>
            </form>

            {{-- Sisi Kanan Grid Produk --}}
            <main class="">
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-6">

                    <x-card-product />
                    <x-card-product />
                    <x-card-product />
                    <x-card-product />
                    <x-card-product />




                </div>
            </main>


        </div>
    </section>


    {{-- <section class="mx-auto px-10 py-20 bg-gray-50 font-serif">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

            <form class="col-span-1 px-4 py-2 rounded-xl border border-gray-300 shadow-[0_4px_20px_rgba(0,0,0,0.06)]">
                <h3 class="font-bold text-lg">Filter Products</h3>
                <div class="flex flex-col my-3 px-2">
                    <div class="flex items-center justify-between">
                        <h5 class="font-semibold">Kategori</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div class="flex flex-col space-y-2 p-2">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500 text-md">Batik</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500">Kebaya</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between">
                        <h5 class="font-semibold">Material</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div class="flex flex-col space-y-2 p-2">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500">Kain</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500">Katun</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500">Sutra</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between">
                        <h5 class="font-semibold">Teknik</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div class="flex flex-col space-y-2 p-2">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500">Canting Tulis</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500">Celup Ikat</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500">Cap</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <span class="text-gray-500">Printing</span>
                        </label>
                    </div>




                </div>
            </form>

            <main class="col-span-3">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

                    <x-card-product/>
                    <x-card-product/>
                    <x-card-product/>
                    <x-card-product/>
                    <x-card-product/>
                   

                    

                </div>
            </main>


        </div>
    </section> --}}

</x-layouts.user>
