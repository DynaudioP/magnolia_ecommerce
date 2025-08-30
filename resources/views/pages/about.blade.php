<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <title>Magnolia | About Us</title>
</head>

<body>
    <div class="min-h-screen bg-gradient-to-r from-[#25777a] to-[#164345]">
        <nav class="flex justify-between items-center mx-auto py-2 px-12 shadow-sm">
            <div>
                <a href="/"><img class="w-32 cursor-pointer" src="{{ asset('assets/images/logo.png') }}" alt="..."></a>
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
        <!-- About Us Section -->
        <section class="bg-white py-20">
            <div class="container mx-auto px-8 grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16">
                <!-- Sisi Kiri: Text -->
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">
                        Tentang Kami
                    </h2>
                    <p class="text-lg text-gray-600 mb-6">
                        Kami percaya bahwa gaya adalah ekspresi diri. Dengan koleksi pakaian yang nyaman dan stylish,
                        kami hadir untuk menemani keseharianmu—baik untuk bekerja, bersantai, atau bersosialisasi.
                    </p>
                    <p class="text-lg text-gray-600">
                        Misi kami adalah menghadirkan produk yang tidak hanya indah dipakai,
                        tapi juga membuatmu merasa percaya diri di setiap momen.
                    </p>
                </div>

                <!-- Sisi Kanan: Image -->
                <div class="relative">
                    <img src="{{ asset('assets/images/home-carousel1.png') }}" alt="Tentang Kami"
                        class="rounded-xl shadow-lg w-full object-cover">
                    <!-- optional gambar overlay di depan -->
                    <div class="absolute -bottom-6 -left-6  shadow-md rounded-lg  w-3/4">
                        <img src="{{ asset('assets/images/home-carousel2.png') }}" alt="Tentang Kami"
                        class="rounded-xl shadow-lg w-full object-cover">
                    </div>
                </div>

            </div>

            <div class="container mx-auto px-8 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                

                <!-- Sisi Kiri: Image -->
                <div class="relative">
                    <img src="{{ asset('assets/images/home-carousel1.png') }}" alt="Tentang Kami"
                        class="rounded-xl shadow-lg w-full object-cover">
                    <!-- optional gambar overlay di depan -->
                    <div class="absolute -bottom-6 -left-6  shadow-md rounded-lg  w-3/4">
                        <img src="{{ asset('assets/images/home-carousel2.png') }}" alt="Tentang Kami"
                        class="rounded-xl shadow-lg w-full object-cover">
                    </div>
                </div>

                <!-- Sisi Kanan: Text -->
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">
                        Sejak Kapan?
                    </h2>
                    <p class="text-lg text-gray-600 mb-6">
                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                    <p class="text-lg text-gray-600">
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                    </p>
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
