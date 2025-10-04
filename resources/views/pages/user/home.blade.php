<x-layouts.user title="Home">
    <header>
        <div class="flex justify-center items-center h-[600px] ">
            <div class="space-y-1 px-8">
                <p class="text-gray-200 text-2xl font-semibold">Selamat Datang</p>
                <h1 class="text-4xl  text-white font-bold leading-tight">
                    Temukan Gaya Baru<br>
                    <span
                        class="bg-gradient-to-r from-[#f9d423] via-[#f6ae2d] to-[#d4af37] bg-clip-text text-transparent">Untuk
                        keseharianmu!</span>
                </h1>
                <p class="text-gray-200 text-lg mb-7">Koleksi pakaian nyaman dan stylish, cocok untuk aktivitas
                    apapun.</p>
                <button onclick="window.location.href='/katalog'"
                    class="px-6 py-2 hover:scale-103 cursor-pointer transition rounded-lg font-semibold text-white 
  bg-gradient-to-r from-[#f9d423] via-[#f6ae2d] to-[#d4af37] shadow-md">
                    Belanja Sekarang
                </button>
            </div>
            <div class=" h-full hidden lg:flex justify-center items-end">
                <img class="h-135 w-164 object-fit" src="{{ asset('assets/images/headers.png') }}" alt="">
            </div>
        </div>
    </header>

    {{-- Section Pilihan --}}
    <section class="mx-auto py-16 bg-gray-50">
        <div class="flex justify-center flex-col">
            <h3 class="text-4xl mb-2 text-center font-bold">Featured Categories</h3>
            <h5 class="text-md text-gray-500 text-center">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.</h5>
        </div>

        <div class="grid-wrap px-2 lg:px-32 mt-20">
            <div class="px-2 lg:px-8 grid grid-cols-1 sm:grid-cols-2 mx-auto gap-20 sm:gap-6 ">
                <div class="bg-[#e6eef0] rounded-lg flex justify-between hover:scale-102 transition cursor-pointer">
                    <div class="px-4 sm:px-10 py-4 sm:py-8">
                        <h3 class="font-bold text-2xl mb-1">Batik</h3>
                        <h5 class="font-serif">Lihat Produk ></h5>
                    </div>
                    <div class="relative h-72 sm:h-86 overflow-visible">
                        <img src="{{ asset('assets/images/home-category1.png') }}" alt="Product"
                            class="w-auto h-[115%] object-cover -mt-11 sm:-mt-13">
                    </div>
                </div>

                <div
                    class="bg-[#f0f1eb] rounded-lg flex flex-row-reverse sm:flex-row justify-between hover:scale-102 transition cursor-pointer">
                    <div class="px-4 sm:px-10 py-4 sm:py-8">
                        <h3 class="font-bold text-2xl mb-1">Kebaya</h3>
                        <h5 class="font-serif">Lihat Produk ></h5>
                    </div>
                    <div class="relative h-72 sm:h-86 overflow-visible">
                        <img src="{{ asset('assets/images/home-category2.png') }}" alt="Product"
                            class="w-auto h-[115%] object-cover -mt-11 sm:-mt-13">
                    </div>
                </div>

            </div>
        </div>

    </section>

    {{-- Section Banner --}}
    <section class="px-2 py-8 bg-white ">
        <div class="relative rounded-xl overflow-hidden">
            <!-- Gambar background -->
            <img src="{{ asset('assets/images/home-carousel1.png') }}" alt="Magnolia Batik & Kebaya"
                class="w-full h-64 object-cover">

            <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center px-4">
                <h3 class="text-white text-xl mb-1 font-semibold [text-shadow:_2px_2px_0_#000] tracking-wider">Elegan
                    dalam setiap sentuhan kain tradisi</h3>
                <p class="text-gray-200 text-sm mb-4 tracking-wide">Tawaran spesial menanti anda!</p>

                <button onclick="window.location.href='/katalog'"
                    class="px-6 py-2 border cursor-pointer border-white text-white rounded-full bg-transparent hover:bg-white hover:text-black transition">
                    Belanja Sekarang
                </button>
            </div>
        </div>
    </section>


    {{-- Section Rekomendasi --}}
    <section class="px-2 lg:px-32 bg-gray-50 py-7">
        <div class="px-2 lg:px-8 py-5 bg-gray-50 rounded-2xl">
            <h3 class="font-bold text-4xl mb-2 text-center">Rekomendasi Produk</h3>
            <h5 class="text-md text-gray-500 text-center">Temukan Koleksi Kain Sesuai Seleramu!</h5>
            <div class="flex justify-center mt-4">
                <img class="w-1/6 scale-x-250" src="{{ asset('assets/images/section-line.png') }}" alt="">
            </div>
            <div class="font-serif grid grid-cols-2 md:grid-cols-3 mt-12 gap-4 justify-start lg:justify-center mb-10">

                @foreach ($products->take(3) as $product)
                    <x-card-product prodImage="{{ $product->images->first()->prodImage }}"
                        productName="{{ $product->productName }}" productId="{{ $product->productId }}"
                        category="{{ $product->category->categoryName }}" price="{{ $product->price }}"
                        stockQuantity="{{ $product->stockQuantity }}" />
                @endforeach

            </div>
            <div class="flex justify-center mb-10">
                <button onclick="window.location.href='/katalog'"
                    class="px-6 tracking-wider py-2 border-2 cursor-pointer border-[#167103] bor text-black rounded font-serif bg-transparent hover:bg-gradient-to-r from-[#25777a] to-[#164345] hover:text-white transition">
                    Lihat Semua Produk
                </button>
            </div>

        </div>
    </section>
</x-layouts.user>
