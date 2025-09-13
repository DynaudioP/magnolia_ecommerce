<x-layouts.user>
    <div class="min-h-[70vh] bg-gray-50 font-serif">
        <div class=" max-w-7xl mx-auto p-3 md:p-10">
            {{-- Judul Keranjang --}}
            <div class="flex items-center gap-3 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9h14l-2-9M9 21a2 2 0 100-4 2 2 0 000 4zm8 0a2 2 0 100-4 2 2 0 000 4z" />
                </svg>
                <h3 class="font-bold text-2xl">Keranjang</h3>
            </div>

            {{-- Wrap Grid Keranjang --}}
            <form class="grid grid-cols-1 sm:grid-cols-4 gap-6 ">

                {{-- Sisi Kiri List-list Keranjang --}}
                <div class="col-span-3 flex flex-col gap-3">
                    <div class="flex py-4 px-6 rounded-xl shadow-sm border border-gray-200 bg-white">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox"
                                class="form-checkbox w-4 h-4 rounded-full border-gray-400 text-black focus:ring-black">
                            <h4 class="text-md font-semibold">Pilih Semua <span class="text-gray-500">(3)</span></h4>
                        </label>
                    </div>
                    {{-- Card List Item Keranjang --}}
                    <x-keranjang-card />
                    <x-keranjang-card />
                    <x-keranjang-card />
                </div>

                {{-- Sisi Kanan Ringkasan Total Harga Keranjang --}}
                <div class="col-span-1">
                    <div class="bg-white rounded-t-xl flex justify-center items-center sm:block shadow p-6 fixed bottom-0 inset-x-0 sm:static sm:rounded-xl">

                        <h2 class="text-lg hidden sm:block font-semibold mb-4 sm:mb-4">Ringkasan Belanja</h2>

                        <div class="hidden sm:flex justify-between text-sm mb-2">
                            <span class="text-gray-600">Jumlah Barang</span>
                            <span class="font-medium">1</span>
                        </div>

                        <hr class="my-4">

                        <div class="flex gap-5 sm:gap-0 justify-between text-base font-semibold mb-0 sm:mb-4">
                            <span>Total</span>
                            <span class="text-sky-600">Rp. 150.000,-</span>
                        </div>
                        
                        <button
                            class="w-36 ml-auto sm:w-full cursor-pointer bg-green-600 text-white py-3 rounded-lg font-medium hover:bg-green-700 transition">
                            Pesan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layouts.user>
