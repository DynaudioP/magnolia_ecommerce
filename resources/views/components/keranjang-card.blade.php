{{-- Wrap Card List Keranjang --}}
<div
    class="flex bg-white flex-wrap justify-center items-center gap-1 md:gap-2 py-2 px-3 md:py-4 md:px-6 rounded-xl shadow-sm border border-gray-200">
    <input type="checkbox" class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
    {{-- Gambar Item Keranjang --}}
    <div>
        <img src="{{ asset('assets/images/catalog1.jpg') }}" alt="Product"
            class="rounded-xl w-full h-16 lg:h-24 object-cover">
    </div>

    {{-- Deskripsi List Keranjang --}}
    <div class="flex flex-col ml-1 md:ml-3">
        <h6 class="text-sm text-gray-400">Batik</h6>
        <h3 class="font-semibold mb-3">Kain Batik Khas Solo</h3>
        <h4 class="font-semibold text-sky-600">Rp. 150.000,-</h4>
    </div>
    <div class="flex items-center space-x-3 self-end md:ml-auto">
        {{-- Icon Gambar Sampah --}}
        <button
            class="p-2 rounded-full border border-gray-300 cursor-pointer hover:bg-red-50 hover:text-red-500 transition">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19 7L18 20H6L5 7M10 11V17M14 11V17M9 7V4H15V7M4 7H20" />
            </svg>
        </button>

        {{-- Button Atur Jumlah Barang di Keranjang --}}
        <div class="flex items-center border border-gray-300 rounded-full px-3 py-1 space-x-4">

            <button class="text-gray-500 cursor-pointer hover:text-gray-700">-</button>


            <span class="w-6 text-center">1</span>


            <button class="text-gray-500 cursor-pointer hover:text-gray-700">+</button>
        </div>
    </div>
</div>
