<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <title>Magnolia | Home</title>
</head>

<body>
    {{-- Wrap Halaman --}}
    <div class="min-h-screen bg-gradient-to-r from-[#25777a] to-[#164345]
">
        {{-- Navigasi Bar --}}
        <nav class="flex justify-between items-center mx-auto py-2 px-12 shadow-sm">
            <div>
                <img class="w-32 cursor-pointer" src="{{ asset('assets/images/logo.png') }}" alt="...">
            </div>
            <div>
                <ul>
                    <li class="flex space-x-7">
                        <a href="/about"
                            class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                            About Us
                        </a>
                        <a href="#"
                            class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                            Katalog
                        </a>
                        <a href="#"
                            class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                            Find Your Style
                        </a>
                        <a href="#"
                            class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                            Keranjang
                        </a>
                        <a href="#"
                            class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                            Pesanan
                        </a>
                    </li>
                </ul>
            </div>

            <div class="px-5 py-2 bg-white mr-3 rounded-xl">
                <a href="/login" class="font-semibold text-[#36A4A9]">Masuk</a>
            </div>
        </nav>

        {{-- Home Header --}}
        <header>
            <div class="flex justify-center items-center h-[600px] ">
                <div class="w-1/2 space-y-1 px-8">
                    <p class="text-gray-200 text-2xl font-semibold">Selamat Datang</p>
                    <h1 class="text-4xl text-white font-bold leading-tight">
                        Temukan Gaya Baru<br>
                        <span
                            class="bg-gradient-to-r from-[#f9d423] via-[#f6ae2d] to-[#d4af37] bg-clip-text text-transparent">Untuk
                            keseharianmu!</span>
                    </h1>
                    <p class="text-gray-200 text-lg mb-7">Koleksi pakaian nyaman dan stylish, cocok untuk aktivitas
                        apapun.</p>
                    <button
                        class="px-6 py-2 rounded-lg font-semibold text-white 
  bg-gradient-to-r from-[#f9d423] via-[#f6ae2d] to-[#d4af37] shadow-md">
                        Belanja Sekarang
                    </button>
                </div>
                <div class="w-1/4 h-full">
                    <img class="h-full object-cover" src="{{ asset('assets/images/header.png') }}" alt="">
                </div>
            </div>
        </header>

        {{-- Section Home --}}
        <section class="px-4 lg:px-32 bg-white py-7">
            <div class="px-8 py-5 bg-white rounded-2xl">
                <h3 class="font-bold text-4xl text-center">Rekomendasi Produk</h3>
                <h5 class="text-md text-gray-500 text-center">Temukan Koleksi Kain Sesuai Seleramu!</h5>
                <div class="flex justify-center mt-4">
                    <img class="w-1/4 scale-x-250" src="{{ asset('assets/images/section-line.png') }}" alt="">
                </div>
                <div class="flex flex-row flex-wrap mt-8 gap-3 justify-start lg:justify-center">

                    <div class="card bg-white rounded-xl border border-gray-200 shadow rounded-md">
                        <div class="w-72  rounded-t-lg">
                            <img class="rounded-t-lg" src="{{ asset('assets/images/catalog1.jpg') }}" alt="">
                        </div>
                        <div class="p-3">
                            <h5 class="mb-2 text-sm text-gray-400">Batik</h5>
                            <h3 class="font-bold text-lg mb-0.5 font-serif">Kain Batik Khas Solo</h3>

                            <h3 class="font-bold font-serif text-md mb-1">Rp. 200.000,-</h3>
                        </div>
                    </div>
                    <div class="card bg-white rounded-xl border border-gray-200 shadow rounded-md">
                        <div class="w-72  rounded-t-lg">
                            <img class="rounded-t-lg" src="{{ asset('assets/images/catalog1.jpg') }}" alt="">
                        </div>
                        <div class="p-3">
                            <h5 class="mb-2 text-sm text-gray-400">Batik</h5>
                            <h3 class="font-bold text-lg mb-0.5 font-serif">Kain Batik Khas Solo</h3>

                            <h3 class="font-bold font-serif text-md mb-1">Rp. 200.000,-</h3>
                        </div>
                    </div>
                    <div class="card bg-white rounded-xl border border-gray-200 shadow rounded-md">
                        <div class="w-72  rounded-t-lg">
                            <img class="rounded-t-lg" src="{{ asset('assets/images/catalog1.jpg') }}" alt="">
                        </div>
                        <div class="p-3">
                            <h5 class="mb-2 text-sm text-gray-400">Batik</h5>
                            <h3 class="font-bold text-lg mb-0.5 font-serif">Kain Batik Khas Solo</h3>

                            <h3 class="font-bold font-serif text-md mb-1">Rp. 200.000,-</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Footer --}}
        <footer class="text-white py-7">
            <div class="container mx-auto flex flex-col items-center space-y-6">
                {{-- Link Sosial Media --}}
                <div class="flex space-x-6">
                    <a href="#"
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-600">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-600">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-600">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-600">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-600">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
                {{-- Navigasi Footer --}}
                <div class="flex space-x-8 text-gray-300">
                    <a href="#" class="hover:text-white">Home</a>
                    <a href="#" class="hover:text-white">Catalog</a>
                    <a href="#" class="hover:text-white">Find Your Style</a>
                    <a href="#" class="hover:text-white">Keranjang</a>
                    <a href="#" class="hover:text-white">Pesanan</a>
                </div>
                {{-- Logo Gambar --}}
                <div>
                    <img class="w-32 cursor-pointer" src="{{ asset('assets/images/logo.png') }}" alt="...">
                </div>
                {{-- Copyrights --}}
                <div class="text-sm text-gray-300 border-t border-gray-700 pt-4">
                    Copyright ©2025 <span class="font-semibold text-white">Magnolia Kebaya dan Batik</span>
                </div>
            </div>
        </footer>

    </div>
</body>

</html>
