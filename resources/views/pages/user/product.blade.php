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
                <div class="mt-2 text-gray-600 text-sm">
                    Ukuran: <span class="font-semibold">S, M, L, XL</span> 
                </div>
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

                {{-- Button Keranjang --}}
                <div x-data="{ open: false, step: 1 }" class="relative w-full mx-3">
                    <!-- Trigger Button -->
                    <button @click="open = true"
                        class="cursor-pointer w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
                        + Keranjang
                    </button>

                    {{-- <!-- Overlay --> --}}
                    <div x-show="open"
                        class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-start sm:items-center justify-center z-50"
                        x-transition.opacity.duration.300ms @click.self="open = false; step = 1">

                        {{-- <!-- Modal Box --> --}}
                        <div class="bg-white rounded-xl shadow-lg p-5 w-full max-w-6xl mx-4 my-4 transform transition-all"
                            x-show="open" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-90 translate-y-4"
                            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                            x-transition:leave-end="opacity-0 scale-90 translate-y-4">

                            {{-- <!-- Progress Bar --> --}}
                            <div class="flex items-center justify-center mb-6">
                                <div class="flex-1 h-2 rounded-full mr-2"
                                    :class="step >= 1 ? 'bg-green-600' : 'bg-gray-300'"></div>
                                <div class="flex-1 h-2 rounded-full"
                                    :class="step >= 2 ? 'bg-green-600' : 'bg-gray-300'"></div>
                            </div>


                            {{-- <!-- Form Custom Size --> --}}
                            <div x-show="step === 1">
                                <h2 class="text-xl font-bold mb-4">Custom Size</h2>
                                <p class="text-gray-600 mb-6">Masukkan ukuran sesuai kebutuhanmu:</p>

                                <div
                                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 max-h-[60vh] overflow-y-auto pr-2 py-1">
                                    <template
                                        x-for="field in [
                            'Height','Bust Height','Under Arm','Weight','Front Height','Shoulder Length',
                            'Body Circumference','Shoulder Width','Back Width','Back Length'
                        ]"
                                        :key="field">
                                        <div class="flex items-center gap-3 px-2">
                                            <label class="w-32 text-sm font-medium text-gray-700"
                                                x-text="field"></label>
                                            <input type="number" placeholder="Isi ukuran (CM)"
                                                class="flex-1 border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none">
                                        </div>
                                    </template>
                                </div>
                            </div>

                            {{-- <!-- Form Custom Design --> --}}
                            <div x-show="step === 2">
                                <h2 class="text-xl font-bold mb-4">Custom Design</h2>
                                <p class="text-gray-600 mb-6">Masukkan design sesuai kebutuhanmu:</p>

                                <div class="grid grid-cols-1 gap-6">

                                    {{-- <!-- Upload File --> --}}
                                    <div x-data="{ filename: '' }" class="w-full">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Upload File</label>

                                        <div
                                            class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                                            <input type="file" accept="image/*"
                                                @change="filename = $event.target.files[0]?.name" class="hidden"
                                                id="fileInput">
                                            <label for="fileInput"
                                                class="px-4 py-2 bg-gray-100 cursor-pointer hover:bg-gray-200">Browse</label>
                                            <span class="px-3 py-2 text-gray-500"
                                                x-text="filename || 'Belum ada file dipilih (maks 20mb)'"></span>
                                        </div>
                                    </div>

                                    {{-- <!-- Deskripsi --> --}}
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                                        <textarea rows="4" placeholder="Tulis deskripsi..."
                                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none"></textarea>
                                    </div>

                                </div>
                            </div>

                            {{-- <!-- Tombol Navigasi Form --> --}}
                            <div class="flex justify-end gap-3 mt-6">
                                <button @click="open = false; step = 1"
                                    class="px-4 py-2 rounded-lg border border-gray-300 hover:bg-gray-100 transition">
                                    Batal
                                </button>
                                <template x-if="step === 1">
                                    <button @click="step = 2"
                                        class="px-4 py-2 rounded-lg bg-green-600 text-white hover:bg-green-700 transition">
                                        Selanjutnya
                                    </button>
                                </template>
                                <template x-if="step === 2">
                                    <a href="/keranjang"
                                        class="px-4 py-2 rounded-lg bg-green-600 text-white hover:bg-green-700 transition">
                                        Simpan
                                    </a>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>

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
