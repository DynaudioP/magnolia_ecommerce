<x-layouts.admin>
    <main class="p-6 bg-gray-50 overflow-auto">
        <div>
            <h2 class="text-2xl font-bold mb-4">Order Pelanggan</h2>

            {{-- <!-- Header (search + button Verifikasi) --> --}}
            <div class="flex justify-between items-center flex-wrap-reverse gap-2 mb-4 font-serif">
                {{-- <!-- Search ORder--> --}}
                <div class="flex-1">
                    <input type="text" placeholder="Search..."
                        class="border w-full md:w-1/3 border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-green-300">
                </div>
                {{-- <!-- Button Verifikasi --> --}}
                <div x-data="{ open: false }" x-cloak class="relative">
                    <button @click="open = true"
                        class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                        Verifikasi
                    </button>

                    {{-- <!-- Overlay --> --}}
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="fixed inset-0 bg-black/30 backdrop-blur-xs flex items-center justify-center z-70"
                        @click.self="open = false">

                        {{-- <!-- Modal Box --> --}}
                        <div x-show="open" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="bg-white rounded-xl shadow-lg p-6 w-96">

                            <h2 class="text-xl font-bold mb-4">Konfirmasi</h2>
                            <p class="text-gray-600 mb-6">Anda Yakin Verifikasi Pembayaran</p>

                            {{-- Button  Konfirmasi --}}
                            <div class="flex justify-end gap-3">
                                <button @click="open = false"
                                    class="px-4 py-2 rounded-lg border border-gray-300 hover:bg-gray-100 transition">
                                    Batal
                                </button>
                                <a href="/keranjang"
                                    class="px-4 py-2 rounded-lg bg-green-600 text-white hover:bg-green-700 transition">
                                    Ya, Verifikasi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

        {{-- <!-- Table ORder Pelanggan--> --}}
        <div class="overflow-x-auto bg-white rounded-lg shadow font-serif">
            <table class="w-full border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border border-gray-300">
                            <input type="checkbox" class="w-4 h-4">
                        </th>
                        <th class="px-4 py-2 border border-gray-300">OrderId</th>
                        <th class="px-4 py-2 border border-gray-300">Orderan</th>
                        <th class="px-4 py-2 border border-gray-300">Bukti Pembayaran</th>
                        <th class="px-4 py-2 border border-gray-300">Price</th>
                        <th class="px-4 py-2 border border-gray-300">Status</th>
                        <th class="px-4 py-2 border border-gray-300">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="checkbox" class="w-4 h-4">
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">6767</td>
                        <td class="border border-gray-300 px-4 py-2">Batik</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">image</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">Rp</td>
                        <td class="border border-gray-300 px-4 py-2 text-yellow-600 font-semibold text-center">Pending</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            {{-- Button Update Status --}}
                            <button class="text-blue-600 hover:underline">Update status</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <input type="checkbox" class="w-4 h-4">
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">7877</td>
                        <td class="border border-gray-300 px-4 py-2">Kebaya</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">image</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">Rp</td>
                        <td class="border border-gray-300 px-4 py-2 text-yellow-600 font-semibold text-center">Pending</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            {{-- Button Update Status --}}
                            <button class="text-blue-600 hover:underline">Update status</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- <!-- Pagination --> --}}
        <div class="flex justify-center mt-4 space-x-2">
            <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100">&lt;&lt;</button>
            <button class="px-3 py-1 border border-gray-300 rounded bg-green-600 text-white">1</button>
            <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100">2</button>
            <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100">3</button>
            <button class="px-3 py-1 border border-gray-300 rounded">&gt;&gt;</button>
        </div>
    </main>

</x-layouts.admin>
