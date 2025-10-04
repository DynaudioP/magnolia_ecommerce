<x-layouts.admin>
    <main class="p-6 bg-gray-50 overflow-auto">
        <div>
            <h2 class="text-2xl font-bold mb-4">Dashboard</h2>

            {{-- <!-- Header (search + Tambah Produk) --> --}}
            <div class="flex justify-between items-center flex-wrap-reverse gap-2 mb-4 font-serif">
                {{-- <!-- Search --> --}}
                <div class="flex-1">
                    <input type="text" placeholder="Search..."
                        class="border w-full md:w-1/3 border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-green-300">
                </div>
                {{-- <!-- Button Tambah Produk--> --}}
                <button onclick="window.location.href='{{ route('admin.products.create') }}'"
                    class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                    + Tambah Produk
                </button>
            </div>

        </div>

        {{-- <!-- Table Produk --> --}}
        <div class="overflow-x-auto bg-white  rounded-lg shadow font-serif">
            <table class="w-full border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Nama Produk</th>
                        <th class="px-4 py-2">Stok</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $index => $product)
                        <tr>
                            <td class="border-gray-300 border-b px-4 py-2 text-center">{{ $index + 1 }}</td>
                            <td class="border-gray-300 border-b px-4 py-2">{{ $product->productName }}</td>
                            <td class="border-gray-300 border-b px-4 py-2 text-center">{{ $product->stockQuantity }}</td>
                            <td
                                class="border-gray-300 border-b px-4 py-2 text-center flex items-center justify-center gap-2">
                                {{-- Button Hapus --}}
                                <div x-data="{ open: false }" x-cloak class="relative">
                                    <button @click="open = true" class="text-red-500 hover:text-red-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            class="w-6 h-6 text-red-500 hover:text-red-700 cursor-pointer">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M1 7h22M8 7V4a1 1 0 011-1h6a1 1 0 011 1v3" />
                                        </svg>
                                    </button>

                                    {{-- Overlay --}}
                                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition ease-in duration-200"
                                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                        class="fixed inset-0 bg-black/30 backdrop-blur-xs flex items-center justify-center z-70"
                                        @click.self="open = false">

                                        {{-- Modal Box Konfirmasi --}}
                                        <div x-show="open" x-transition:enter="transition ease-out duration-300"
                                            x-transition:enter-start="opacity-0 scale-95"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-200"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-95"
                                            class="bg-white rounded-xl shadow-lg p-6 w-96">

                                            <h2 class="text-xl self-start font-bold mb-4">Konfirmasi</h2>
                                            <p class="text-gray-600 mb-6">Anda yakin ingin menghapus produk?
                                                <br><b>{{ $product->productName }}</b></p>

                                            <div class="flex justify-end gap-3">
                                                <button @click="open = false"
                                                    class="px-4 py-2 rounded-lg border border-gray-300 hover:bg-gray-100 transition">
                                                    Batal
                                                </button>

                                                {{-- Form Delete --}}
                                                <form action="{{ route('admin.products.delete', $product->productId) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="px-4 py-2 rounded-lg bg-green-600 text-white hover:bg-green-700 transition">
                                                        Ya, Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Button Edit --}}
                                <button onclick="window.location.href='{{ route('admin.products.edit', $product->productId) }}'"
                                    class="text-blue-500 hover:text-blue-700 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 text-blue-500 hover:text-blue-700 cursor-pointer">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 7.125l-1.875-1.875" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

        {{-- <!-- Pagination Produk --> --}}
        {{ $products->links() }}
        {{-- <div class="flex justify-center mt-4 space-x-2">
            <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100">&lt;&lt;</button>
            <button class="px-3 py-1 border border-gray-300 rounded bg-green-600 text-white">1</button>
            <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100">2</button>
            <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100">3</button>
            <button class="px-3 py-1 border border-gray-300 rounded">&gt;&gt;</button>
        </div> --}}
    </main>

</x-layouts.admin>
