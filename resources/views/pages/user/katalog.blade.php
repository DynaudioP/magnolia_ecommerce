<x-layouts.user>

    {{-- Bagian Search Product di Catalog --}}
    <header class="bg-gradient-to-r from-[#25777a] to-[#164345] p-6 flex justify-center">
        <div
            class="flex items-center bg-white rounded-lg shadow-md overflow-hidden w-full max-w-lg focus-within:ring-2 focus-within:ring-teal-500 transition duration-200">

            <span class="pl-3 text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8" />
                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                </svg>

            </span>
            <input type="text" placeholder="Cari di Magnolia"
                class="w-full px-3 py-2.5 text-gray-700 focus:outline-none" />
        </div>
    </header>

    {{-- Bagian Section Product --}}
    <section class="mx-auto px-2 md:px-10 py-20 bg-gray-50 font-serif">
        <div class="grid grid-cols-1 lg:grid-cols-[300px_1fr] items-start gap-6">
            {{-- Sisi kIri Grid Filter Produk --}}
            <form class="px-4 py-2 rounded-xl border border-gray-300 shadow-[0_4px_20px_rgba(0,0,0,0.06)]">
                <h3 class="font-bold text-lg">Filter Products</h3>
                <div class="flex flex-col my-3 px-2">
                    
                    {{-- Filter Kategori --}}
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
                    {{-- --}}

                    {{-- Filter Material --}}
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
                    {{--  --}}

                    {{-- Filter Teknik --}}
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
                    {{--  --}}

                    {{-- Button Filter --}}
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

                    {{-- Card List List Produk --}}
                    <x-card-product />
                    <x-card-product />
                    <x-card-product />
                    <x-card-product />
                    <x-card-product />




                </div>
            </main>


        </div>
    </section>

{{-- Tidak dipakai --}}
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
