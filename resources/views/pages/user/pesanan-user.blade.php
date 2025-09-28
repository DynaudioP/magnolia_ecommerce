<x-layouts.user>
    {{-- Wrap Halaman Pesanan --}}
    <div class="min-h-[70vh] bg-gray-50 font-serif">
        <div class=" max-w-7xl mx-auto p-3 md:p-10">
            {{-- Headers --}}
            <h1 class="font-bold text-2xl">Pesanan</h1>
            {{-- Form Pembayaran --}}
            <form action="/pembayaran" class="grid grid-cols-1">
                <div class="py-4 px-6 rounded-xl shadow-sm border border-gray-200 bg-white mt-2">
                    <div x-data="{ pengiriman: '' }">
                        <h3 class="block text-lg font-bold text-gray-700 mb-2">Pengiriman</h3>
                        <div class="flex gap-6 flex-wrap">
                            {{-- Radio Button Pickup Toko --}}
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="pengiriman" value="pickup" x-model="pengiriman"
                                    class="appearance-none w-4 h-4 rounded-xl border border-gray-400 checked:border-green-600 checked:bg-green-600 focus:ring-1 focus:ring-green-300 focus:outline-none">
                                <span class="text-md">Pick-up di Toko</span>
                            </label>

                            {{-- Radio Button Kirik ke Alamat --}}
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="pengiriman" value="alamat" x-model="pengiriman"
                                    class="appearance-none w-4 h-4 rounded-xl border border-gray-400 checked:border-green-600 checked:bg-green-600 focus:ring-1 focus:ring-green-300 focus:outline-none">
                                <span>Kirim ke Alamat Terdaftar</span>
                            </label>
                        </div>

                        {{-- Tampilan pilihan Pickup --}}
                        <div x-show="pengiriman === 'pickup'"
                            x-transition:enter="transition ease-out duration-300 delay-200"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="my-4">
                            <h3 class="font-semibold text-lg mb-2">Detail Pick-up Toko</h3>
                            <p class="text-gray-700">Silakan ambil pesanan di toko kami:</p>
                            <p class=" text-gray-800 font-medium mt-1">Jl. Lorem Ipsum</p>

                            <div class="mt-3">
                                <h4 class="font-semibold  text-gray-700">Jam Operasional:</h4>
                                <ul class="list-disc list-inside text-gray-600 mt-1">
                                    <li>Senin - Sabtu: <span class="text-green-600">09.00 - 20.00</span></li>
                                    <li>Minggu & Hari Libur: <span class="text-red-500">Tutup</span></li>
                                </ul>
                            </div>
                        </div>

                        {{-- Tampilan Pilihan Kirim Alamat --}}
                        <div x-show="pengiriman === 'alamat'"
                            x-transition:enter="transition ease-out duration-300 delay-200"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0" x-cloak class="my-4">
                            <h3 class="font-semibold text-lg mb-2">Alamat Pengiriman</h3>
                            <div class="flex items-center mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-6 text-green-600 inline-block mr-1"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5s-3 1.343-3 3 1.343 3 3 3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.5 9c0 7.5-7.5 12-7.5 12S4.5 16.5 4.5 9a7.5 7.5 0 1115 0z" />
                                </svg>
                                <h4>Rumah Rachelle</h4>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 items-start">
                                <textarea readonly
                                    class="w-full h-11 border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none"
                                    placeholder="Masukkan alamat lengkap...">Sepanjang jalan kenangan</textarea>

                                
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Section Bagian Bawah Metode Pembayaran --}}
                <div class="py-4 px-6 rounded-xl shadow-sm border border-gray-200 bg-white mt-2">
                    <h3 class="block text-lg font-bold text-gray-700 mb-2">Metode Pembayaran</h3>
                    {{-- Pilihan Metode Pembayaran --}}
                    <div x-data="{ selected: '' }" class="flex gap-6 flex-wrap mb-4">
                        <!-- BCA -->
                        <label @click="selected = 'bca'"
                            :class="selected === 'bca' ? 'border-green-500 ring-2 ring-green-500' : 'border-gray-200'"
                            class="flex items-center justify-center cursor-pointer border rounded-lg px-4 py-2 shadow-sm hover:shadow-md transition w-40">
                            <input type="radio" name="pembayaran" value="bca" class="hidden" x-model="selected">
                            <img src="{{ asset('assets/icons/bca.svg') }}" class="h-7 mx-auto object-contain"
                                alt="">
                        </label>

                        <!-- BNI -->
                        <label @click="selected = 'bni'"
                            :class="selected === 'bni' ? 'border-green-500 ring-2 ring-green-500' : 'border-gray-200'"
                            class="flex items-center justify-center cursor-pointer border rounded-lg px-4 py-2 shadow-sm hover:shadow-md transition w-40">
                            <input type="radio" name="pembayaran" value="bni" class="hidden" x-model="selected">
                            <img src="{{ asset('assets/icons/bni.svg') }}" class="h-7 mx-auto object-contain"
                                alt="">
                        </label>

                        <!-- BRI -->
                        <label @click="selected = 'bri'"
                            :class="selected === 'bri' ? 'border-green-500 ring-2 ring-green-500' : 'border-gray-200'"
                            class="flex items-center justify-center cursor-pointer border rounded-lg px-4 py-2 shadow-sm hover:shadow-md transition w-40">
                            <input type="radio" name="pembayaran" value="bri" class="hidden" x-model="selected">
                            <img src="{{ asset('assets/icons/bri.svg') }}" class="h-7 mx-auto object-contain"
                                alt="">
                        </label>
                    </div>

                    {{-- Ringkasan Pembelanjaan --}}
                    <h3 class="block text-lg font-bold text-gray-700 mb-2">Ringkasan Pembelanjaan</h3>
                    <div class="flex flex-col  p-3">
                        <p>Harga per Item : <span class="text-blue-600 font-bold">Rp.200.000 ,-</span> </p>
                        <p>Total Item : <span class="text-green-600">2</span> </p>
                        <p>Total Biaya : <span class="text-blue-600 font-bold">Rp.600.000 ,-</span> </p>
                        <p>Total Biaya Tambahan : <span class="text-blue-600 font-bold">Rp.150.000 ,-</span> </p>

                        <h3 class="font-bold mt-12 mb-3">Total Tagihan : <span class="text-blue-600 ">Rp.
                                750.000,-</span></h3>

                        {{-- Button Pembayaran --}}
                        <button class="bg-green-600 text-white py-2 px-3 rounded w-48">Bayar Sekarang</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</x-layouts.user>
