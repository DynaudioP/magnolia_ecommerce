<x-layouts.admin>
    <main class="p-6 bg-gray-50 overflow-auto" x-data="uploadBukti()">
        <div class="border-b border-gray-300 mb-5">
            <h2 class="text-2xl font-bold mb-4">Tambah Produk</h2>
        </div>

        {{-- Form Tambah Produk --}}
        <form action="/products" method="POST" class="space-y-4 font-serif">
            @csrf

           {{-- Nama Produk --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4">
                <label for="name" class="text-sm font-medium text-gray-700">Produk Name</label>
                <input type="text" id="name" name="name"
                    class="md:col-span-3 border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400">
            </div>

            {{-- <!-- Category --> --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4">
                <label for="category" class="text-sm font-medium text-gray-700">Category</label>
                <input type="text" id="category" name="category"
                    class="md:col-span-3 border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400">
            </div>

            {{-- <!-- Ukuran Kain --> --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4">
                <label for="size" class="text-sm font-medium text-gray-700">Ukuran Kain</label>
                <input type="text" id="size" name="size"
                    class="md:col-span-3 border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400">
            </div>

            {{-- <!-- Teknik --> --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4">
                <label for="teknik" class="text-sm font-medium text-gray-700">Teknik</label>
                <input type="text" id="teknik" name="teknik"
                    class="md:col-span-3 border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400">
            </div>

            {{-- <!-- Material --> --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4">
                <label for="material" class="text-sm font-medium text-gray-700">Material</label>
                <input type="text" id="material" name="material"
                    class="md:col-span-3 border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400">
            </div>

            {{-- <!-- Price --> --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4">
                <label for="price" class="text-sm font-medium text-gray-700">Price</label>
                <input type="text" id="price" name="price"
                    class="md:col-span-3 border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400">
            </div>

            {{-- <!-- Upload Gambar Produk --> --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4">
                <label for="testimoni">Gambar <br><span class="text-sm">Menerima .png .jpg</span></label>
                <div
                    class="w-full flex flex-col items-center justify-center border border-gray-300 rounded-lg py-3 hover:bg-gray-100 transition relative cursor-pointer">
                    <input type="file" accept="image/*" @change="previewFile"
                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                    <div class="flex flex-col items-center justify-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5-5 5 5M12 5v12" />
                        </svg>
                        <span>Upload Gambar Produk</span>
                    </div>
                    <template x-if="file">
                        <div class="mt-4 relative w-32 h-32">
                            <img :src="file" class="w-32 h-32 object-cover rounded border" />
                            <button @click="removeFile"
                                class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center -translate-x-1/2 -translate-y-1/2">X</button>
                        </div>
                    </template>
                </div>

            </div>

            {{-- <!-- Button Submit --> --}}
            <div class="flex justify-end pt-4">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                    Simpan
                </button>
            </div>
        </form>
    </main>

</x-layouts.admin>

<script>
    function uploadBukti() {
        return {
            file: null,
            previewFile(event) {
                const input = event.target;
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = e => {
                        this.file = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            },
            removeFile() {
                this.file = null;
                this.$el.querySelector('input[type="file"]').value = '';
            }
        }
    }
</script>
