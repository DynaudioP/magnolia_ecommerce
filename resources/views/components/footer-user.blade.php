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
        <div class="flex flex-wrap justify-center items-center space-x-4 md:space-x-8  text-gray-300">
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
