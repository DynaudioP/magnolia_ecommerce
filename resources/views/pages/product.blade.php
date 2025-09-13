<x-layouts.user>
    <div class="min-h-[70vh] bg-gray-50">

        {{-- Header Search Barang --}}
        <header class="bg-gradient-to-r from-[#25777a] to-[#164345] p-6 flex justify-center">
            <div
                class="flex items-center bg-white rounded-lg shadow-md overflow-hidden w-full max-w-lg focus-within:ring-2 focus-within:ring-teal-500 transition duration-200">
                {{-- Icon Search --}}
                <span class="pl-3 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" />
                    </svg>

                </span>
                {{-- Input --}}
                <input type="text" placeholder="Cari di Magnolia"
                    class="w-full px-3 py-2.5 text-gray-700 focus:outline-none" />
            </div>
        </header>
        <section class="font-serif max-w-7xl mx-auto px-6 py-9 grid grid-cols-1 md:grid-cols-[2fr_3fr_1.5fr] gap-6">
            {{-- Gambar Produk --}}
            <div x-data="{ image: '{{ asset('assets/images/home-carousel1.png') }}' }">
                {{-- Gambar utama --}}
                <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden flex items-center justify-center">
                    <img :src="image" alt="Produk"
                        class="w-full h-full object-cover transition duration-500">
                </div>

                {{-- Thumbnail sejajar --}}
                <div class="grid grid-cols-3 gap-5 mt-4 justify-items-center">
                    <img src="{{ asset('assets/images/home-carousel2.png') }}"
                        @click="image = '{{ asset('assets/images/home-carousel2.png') }}'"
                        class="h-14 w-full sm:h-20 sm:w-full rounded-lg object-cover cursor-pointer hover:ring-2 hover:ring-teal-500 transition">
                    <img src="{{ asset('assets/images/home-carousel3.png') }}"
                        @click="image = '{{ asset('assets/images/home-carousel3.png') }}'"
                        class="h-14 w-full sm:h-20 sm:w-full rounded-lg object-cover cursor-pointer hover:ring-2 hover:ring-teal-500 transition">
                    <img src="{{ asset('assets/images/home-carousel1.png') }}"
                        @click="image = '{{ asset('assets/images/home-carousel1.png') }}'"
                        class="h-14 w-full sm:h-20 sm:w-full rounded-lg object-cover cursor-pointer hover:ring-2 hover:ring-teal-500 transition">
                </div>
            </div>
            {{-- Detail Produk --}}
            <div>
                <h3 class="text-sm  text-gray-400">Batik</h3>
                <h1 class="text-2xl font-semibold">Kain Batik Khas Solo</h1>

                <p class="text-2xl text-sky-600 font-bold mt-2">Rp 200.000</p>

                <div class="mt-4">
                    <h2 class="font-medium mb-1">Informasi Produk</h2>

                    {{-- Container --}}
                    <div x-data="{ expanded: false }" class="text-gray-600 text-sm">
                        {{-- Teks --}}
                        <p :class="expanded ? '' : 'line-clamp-4'">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type and scrambled it to
                            make a type specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining essentially
                            unchanged. It was popularised in the 1960s with the release of Letraset
                            sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem
                        </p>

                        {{-- Tombol --}}
                        <button @click="expanded = !expanded"
                            class="mt-2 cursor-pointer text-teal-600 font-medium hover:underline focus:outline-none">
                            <span x-show="!expanded">Lihat Selengkapnya</span>
                            <span x-show="expanded">Lihat Lebih Sedikit</span>
                        </button>
                    </div>
                </div>

                {{-- Bagian Select Opsi --}}
                <div x-data="{
                    model: '',
                    lining: '',
                    accessory: '',
                    accessoryLevel: '',
                    prices: {
                        model: {
                            blouse: 200000,
                            dress: 300000,
                            rok: 250000,
                            set: 450000,
                        },
                        accessoryLevel: {
                            minimal: 100000,
                            medium: 300000,
                            full: 500000,
                        }
                    },
                
                }" class="mt-4 space-y-1">
                    {{-- Pilih Model --}}
                    <div>
                        <label class="font-medium block mb-1">Tipe Model</label>
                        <select x-model="model" class="w-full border rounded-lg p-1">
                            <option value="">-- Pilih Model --</option>
                            <option value="blouse">Blouse - Rp 200.000</option>
                            <option value="dress">Dress - Rp 300.000</option>
                            <option value="rok">Rok - Rp 250.000</option>
                            <option value="set">Set (Blouse + Rok) - Rp 450.000</option>
                        </select>
                    </div>

                    {{-- Pilih Lining --}}
                    <div>
                        <label class="font-medium block mb-1">Lining Option</label>
                        <select x-model="lining" class="w-full border rounded-lg p-1">
                            <option value="">-- Pilih Lining --</option>
                            <option value="furing-lepas">Furing Lepas</option>
                            <option value="furing-pres">Furing Pres</option>
                            <option value="tanpa-furing">Tanpa Furing</option>
                        </select>
                    </div>

                    {{-- Pilih Aksesoris --}}
                    <div>
                        <label class="font-medium block mb-1">Accessories</label>
                        <select x-model="accessory" class="w-full border rounded-lg p-1">
                            <option value="">-- Pilih Aksesoris --</option>
                            <option value="payet">Payet</option>
                            <option value="mote">Mote</option>
                        </select>
                    </div>

                    {{-- Pilih Level Aksesoris --}}
                    <div>
                        <label class="font-medium block mb-1">Accessory Level</label>
                        <select x-model="accessoryLevel" class="w-full border rounded-lg p-1">
                            <option value="">-- Pilih Level --</option>
                            <option value="minimal">Minimal - Rp 100.000</option>
                            <option value="medium">Medium - Rp 300.000</option>
                            <option value="full">Full - Rp 500.000</option>
                        </select>
                    </div>


                </div>
            </div>

            {{-- Card Masuk Keranjang --}}
            <aside
                class="bg-white rounded-xl border p-2 sm:p-4 shadow-sm h-fit flex justify-evenly md:flex-col md:flex items-center md:static fixed bottom-0 inset-x-0">
                <h2 class="font-medium md:mb-3 hidden sm:block">Atur Jumlah</h2>
                <div class="flex items-center gap-3 md:mb-3">
                    <button
                        class="w-8 h-8 border rounded-full flex items-center justify-center cursor-pointer">-</button>
                    <span>0</span>
                    <button
                        class="w-8 h-8 border rounded-full flex items-center justify-center cursor-pointer">+</button>
                </div>
                <p class="text-sm text-gray-600 mb-3 self-end hidden md:block">Stok total: <span
                        class="font-medium">2</span></p>
                <button onclick="window.location.href='/keranjang'"
                    class="cursor-pointer w-1/2 md:w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
                    + Keranjang
                </button>
            </aside>
        </section>

        {{-- Bagian Testimoni Pembeli --}}
        <section class="font-serif max-w-7xl mx-auto px-6 pb-9 space-y-2">
            <h3 class="text-lg font-bold">
                Testimoni Pembeli
            </h3>

            {{-- Card Deskripsi Testimoni --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <x-testimoni-card />
                <x-testimoni-card />
                <x-testimoni-card />
            </div>
        </section>


    </div>
</x-layouts.user>
