<x-layouts.user>
    <form method="GET" action="{{ route('user.katalog') }}">
        {{-- Bagian Search Product di Catalog --}}
        <header x-data="{
            open: false,
            search: '{{ request('search') }}',
            suggestions: @js($suggestions),
            get filtered() {
                if (!this.search) return this.suggestions.slice(0, 5);
                return this.suggestions
                    .filter(s => s.toLowerCase().includes(this.search.toLowerCase()))
                    .slice(0, 5);
            },
            highlight(text) {
                if (!this.search) return text;
                const regex = new RegExp(`(${this.search})`, 'gi');
                return text.replace(regex, '<strong class=&quot;text-teal-600&quot;>$1</strong>');
            }
        }"
            class="bg-gradient-to-r from-[#25777a] to-[#164345] p-6 flex justify-center relative z-40">

            <!-- Search box -->
            <div
                class="flex items-center bg-white rounded-lg shadow-md w-full max-w-lg focus-within:ring-2 focus-within:ring-teal-500 transition duration-200 relative z-50">

                <!-- Icon -->
                <span class="pl-3 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" />
                    </svg>
                </span>

                <!-- Input -->
                <div class="relative w-full">
                    <input type="text" name="search" placeholder="Cari di Magnolia" x-model="search"
                        autocomplete="off" @focus="open = true" @keydown.escape.window="open = false"
                        class="w-full px-3 py-2.5 text-gray-700 focus:outline-none" />

                    <!-- Dropdown -->
                    <div x-show="open" x-cloak x-transition.opacity
                        class="absolute -left-8 mt-1 w-[calc(100%+2rem)] bg-white shadow-md font-serif rounded-b-lg rounded-t p-3 z-50">
                        <template x-if="filtered.length">
                            <ul>
                                <template x-for="(item, index) in filtered" :key="index">
                                    <li>
                                        <button type="button"
                                            @click.prevent="
                                                search = item;
                                                open = false;
                                                $nextTick(() => {
                                                    document.querySelector('form[action=\'{{ route('user.katalog') }}\']').submit();
                                                });
                                            "
                                            class="block w-full text-left px-4 py-3 hover:bg-gray-100 rounded"
                                            x-html="highlight(item)">
                                        </button>

                                    </li>
                                </template>
                            </ul>
                        </template>
                        <template x-if="!filtered.length">
                            <p class="text-gray-400 text-sm text-center">Tidak ada rekomendasi</p>
                        </template>
                    </div>
                </div>
            </div>

            <!-- Overlay -->
            <div x-show="open" x-cloak x-transition.opacity class="fixed inset-0 bg-black/20 backdrop-blur-[1px] z-40"
                @click="open = false">
            </div>
        </header>




        {{-- Bagian Section Product --}}
        <section class="mx-auto px-2 md:px-10 py-5 md:py-20 bg-gray-50 font-serif">
            <div class="grid grid-cols-1 lg:grid-cols-[300px_1fr] items-start gap-6">
                {{-- Sisi kIri Grid Filter Produk --}}
                {{-- Sisi Kiri Grid Filter Produk --}}
                <div x-data="{ open: false }"
                    class="px-4 py-2 rounded-xl border border-gray-300 shadow-[0_4px_20px_rgba(0,0,0,0.06)]">

                    <!-- Header filter -->
                    <div class="flex items-center justify-between md:block">
                        <h3 class="font-bold text-lg">Filter Products</h3>

                        <!-- Tombol toggle hanya muncul di mobile -->
                        <button @click="open = !open" type="button"
                            class="md:hidden flex items-center space-x-1 text-sm font-semibold text-gray-600">
                            <span x-text="open ? 'Tutup' : 'Lihat Filter'"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': open }"
                                class="h-4 w-4 transform transition-transform duration-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>

                    <!-- Konten Filter -->
                    <div x-show="open || window.innerWidth >= 768" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2" class="flex flex-col my-3 px-2 md:block"
                        x-cloak>

                        {{-- Filter Kategori --}}
                        <div class="flex items-center justify-between">
                            <h5 class="font-semibold">Kategori</h5>
                        </div>
                        <div class="flex flex-col space-y-2 p-2">
                            @foreach ($categories as $category)
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="{{ $category->categoryId }}"
                                        @change="$el.form.submit()"
                                        class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black"
                                        {{ in_array($category->categoryId, request('categories', [])) ? 'checked' : '' }}>
                                    <span class="text-gray-500 text-md">{{ $category->categoryName }}</span>
                                </label>
                            @endforeach
                        </div>

                        {{-- Filter Material --}}
                        <div class="flex items-center justify-between">
                            <h5 class="font-semibold">Material</h5>
                        </div>
                        <div class="flex flex-col space-y-2 p-2">
                            @foreach ($materials as $material)
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox" name="materials[]" value="{{ $material->materialId }}"
                                        @change="$el.form.submit()"
                                        class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black"
                                        {{ in_array($material->materialId, request('materials', [])) ? 'checked' : '' }}>
                                    <span class="text-gray-500 text-md">{{ $material->materialName }}</span>
                                </label>
                            @endforeach
                        </div>

                        {{-- Filter Teknik --}}
                        <div class="flex items-center justify-between">
                            <h5 class="font-semibold">Teknik</h5>
                        </div>
                        <div class="flex flex-col space-y-2 p-2">
                            @foreach ($techniques as $technique)
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox" name="techniques[]" value="{{ $technique->techniqueId }}"
                                        @change="$el.form.submit()"
                                        class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black"
                                        {{ in_array($technique->techniqueId, request('techniques', [])) ? 'checked' : '' }}>
                                    <span class="text-gray-500 text-md">{{ $technique->techniqueName }}</span>
                                </label>
                            @endforeach
                        </div>

                    </div>
                </div>



                {{-- Sisi Kanan Grid Produk --}}
                <main class="">
                    @if (count($products) >= 1)
                        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-6">

                            {{-- Card List List Produk --}}
                            @foreach ($products as $product)
                                <x-card-product prodImage="{{ $product->images->first()->prodImage }}"
                                    productName="{{ $product->productName }}" productId="{{ $product->productId }}"
                                    category="{{ $product->category->categoryName }}" price="{{ $product->price }}"
                                    stockQuantity="{{ $product->stockQuantity }}" />
                            @endforeach

                        </div>
                        <div class="flex justify-center space-x-2 mt-6">
                            {{-- Previous Page --}}
                            @if ($products->onFirstPage())
                                <span class="px-3 py-1 rounded bg-gray-200 text-gray-500">
                                    < </span>
                                    @else
                                        <a href="{{ $products->previousPageUrl() }}"
                                            class="px-3 py-1 rounded bg-gradient-to-r from-[#25777a] to-[#164345] text-white hover:bg-sky-600">
                                            < </a>
                            @endif

                            {{-- Page Numbers (maksimal 3) --}}
                            @php
                                $current = $products->currentPage();
                                $last = $products->lastPage();
                                $start = max(1, $current - 1); // halaman awal
                                $end = min($last, $current + 1); // halaman akhir
                            @endphp

                            @if ($start > 1)
                                <a href="{{ $products->url(1) }}" class="px-3 py-1 rounded hover:bg-green-100">1</a>
                                @if ($start > 2)
                                    <span class="px-3 py-1 text-gray-400">...</span>
                                @endif
                            @endif

                            @for ($page = $start; $page <= $end; $page++)
                                @if ($page == $current)
                                    <span
                                        class="px-3 py-1 rounded bg-gradient-to-r from-[#25777a] to-[#164345] text-white">{{ $page }}</span>
                                @else
                                    <a href="{{ $products->url($page) }}"
                                        class="px-3 py-1 rounded hover:bg-green-100">{{ $page }}</a>
                                @endif
                            @endfor

                            @if ($end < $last)
                                @if ($end < $last - 1)
                                    <span class="px-3 py-1 text-gray-400">...</span>
                                @endif
                                <a href="{{ $products->url($last) }}"
                                    class="px-3 py-1 rounded hover:bg-green-100">{{ $last }}</a>
                            @endif

                            {{-- Next Page --}}
                            @if ($products->hasMorePages())
                                <a href="{{ $products->nextPageUrl() }}"
                                    class="px-3 py-1 rounded bg-gradient-to-r from-[#25777a] to-[#164345] text-white hover:bg-green-600">></a>
                            @else
                                <span class="px-3 py-1 rounded bg-gray-200 text-gray-500">></span>
                            @endif
                        </div>
                    @else
                        <div class="flex justify-center items-center min-h-[60vh] w-full">
                            <h1 class="text-gray-500 text-lg">Tidak Ada Data Yang Ditemukan</h1>
                        </div>
                    @endif


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
    </form>
</x-layouts.user>
