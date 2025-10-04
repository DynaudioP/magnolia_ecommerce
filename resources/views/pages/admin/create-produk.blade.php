<x-layouts.admin>
    <main class="p-6 bg-gray-50 overflow-auto" x-data="uploadBukti()">
        <div class="border-b border-gray-300 mb-5">
            <h2 class="text-2xl font-bold mb-4">Tambah Produk</h2>
        </div>

        {{-- Form Tambah Produk --}}
        <form action="{{ route('admin.products.store') }}" method="POST" class="space-y-4 font-serif"
            enctype="multipart/form-data">
            @csrf

            {{-- Nama Produk --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4">
                <label for="name" class="text-sm font-medium text-gray-700">Produk Name</label>
                <input type="text" id="productName" name="productName" value="{{ old('productName') }}"
                    class="md:col-span-3 border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400">
            </div>

            {{-- <!-- Category --> --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4">
                <label for="category" class="text-sm font-medium text-gray-700">Category</label>
                <select type="text" id="category_id" name="category_id"
                    class="md:col-span-3 border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400">
                    <option value="">-- Pilih Kategori --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->categoryId }}"
                            {{ old('category_id') == $category->categoryId ? 'selected' : '' }}>
                            {{ $category->categoryName }}</option>
                    @endforeach
                </select>

            </div>

            {{-- <!-- Ukuran Kain --> --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4">
                <label for="size" class="text-sm font-medium text-gray-700">Ukuran Kain</label>
                <input type="text" id="fabricSize" name="fabricSize" value="{{ old('fabricSize') }}"
                    class="md:col-span-3 border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400">
            </div>

            {{-- <!-- Teknik --> --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4">
                <label for="teknik" class="text-sm font-medium text-gray-700">Teknik</label>
                <select type="text" id="technique_id" name="technique_id"
                    class="md:col-span-3 border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400">
                    <option value="">-- Pilih Teknik --</option>
                    @foreach ($techniques as $technique)
                        <option value="{{ $technique->techniqueId }}"
                            {{ old('technique_id') == $technique->techniqueId ? 'selected' : '' }}>
                            {{ $technique->techniqueName }}</option>
                    @endforeach
                </select>
            </div>

            {{-- <!-- Material --> --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4">
                <label for="material" class="text-sm font-medium text-gray-700">Material</label>
                <select type="text" id="material_id" name="material_id"
                    class="md:col-span-3 border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400">
                    <option value="">-- Pilih Material --</option>
                    @foreach ($materials as $material)
                        <option value="{{ $material->materialId }}"
                            {{ old('material_id') == $material->materialId ? 'selected' : '' }}>
                            {{ $material->materialName }}</option>
                    @endforeach
                </select>
            </div>

            {{-- <!-- Stock Quantity --> --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4">
                <label for="stockQuantity" class="text-sm font-medium text-gray-700">Stok</label>
                <input type="number" id="stockQuantity" name="stockQuantity" value="{{ old('stockQuantity') }}"
                    class="md:col-span-3 border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400">
            </div>

            {{-- <!-- Price --> --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4" x-data="{
                displayPrice: '{{ old('price') }}',
                cleanPrice: '',
                formatPrice() {
                    // ambil angka mentah
                    let number = this.displayPrice.replace(/\D/g, '');
                    // update hidden input
                    this.cleanPrice = number;
                    // format ke tampilan ribuan
                    this.displayPrice = new Intl.NumberFormat('id-ID').format(number);
                }
            }"
                x-init="formatPrice()">

                <label for="price" class="text-sm font-medium text-gray-700">Price</label>

                <input type="text" id="price_display" x-model="displayPrice" x-on:input="formatPrice"
                    class="md:col-span-3 border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400">

                <input type="hidden" name="price" :value="cleanPrice">
            </div>


            {{-- Upload Gambar Produk --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-start gap-2 md:gap-4">
                <label for="images" class="text-sm font-medium text-gray-700">
                    Gambar <br><span class="text-xs text-gray-500">Maks 3 file (.png .jpg) 2 MB</span>
                </label>
                <div
                    class="md:col-span-3 w-full flex flex-col items-center justify-center border border-gray-300 rounded-lg py-3 hover:bg-gray-100 transition relative cursor-pointer">
                    <input type="file" accept="image/*" name="images[]" multiple @change="previewFile"
                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                    <div class="flex flex-col items-center justify-center pointer-events-none"
                        x-show="files.length === 0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5-5 5 5M12 5v12" />
                        </svg>
                        <span>Upload Gambar Produk</span>
                    </div>

                    {{-- Preview grid --}}
                    <div class="grid grid-cols-2 gap-4 mt-4 w-full px-4" x-show="files.length > 0">
                        <template x-for="(image, index) in files" :key="index">
                            <div class="relative w-full h-32">
                                <img :src="image" class="w-full h-32 object-cover rounded border" />
                                <button type="button" @click="removeFile(index)"
                                    class="absolute top-1 cursor-pointer right-1 bg-red-400 text-white rounded-full w-6 h-6 flex items-center justify-center">
                                    X
                                </button>
                            </div>
                        </template>
                    </div>
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
    // function productForm() {
    //     return {
    //         files: [],
    //         validateForm(e) {
    //             // ambil semua field
    //             let name = document.getElementById('productName').value.trim();
    //             let category = document.getElementById('category_id').value;
    //             let size = document.getElementById('fabricSize').value.trim();
    //             let technique = document.getElementById('technique_id').value;
    //             let material = document.getElementById('material_id').value;
    //             let stock = document.getElementById('stockQuantity').value.trim();
    //             let price = document.getElementById('price').value.trim();

    //             // validasi
    //             if (!name || !category || !size || !technique || !material || !stock || !price) {
    //                 alert("Semua field wajib diisi!");
    //                 return false;
    //             }

    //             if (this.files.length === 0) {
    //                 alert("Minimal 1 gambar produk wajib diupload!");
    //                 return false;
    //             }

    //             if (this.files.length > 4) {
    //                 alert("Maksimal hanya 4 gambar.");
    //                 return false;
    //             }

    //             e.target.submit(); // kalau lolos, submit form
    //         },
    //         previewFile(event) {
    //             const input = event.target;
    //             if (input.files) {
    //                 if (this.files.length + input.files.length > 4) {
    //                     alert("Maksimal hanya 4 gambar.");
    //                     input.value = "";
    //                     return;
    //                 }
    //                 Array.from(input.files).forEach(file => {
    //                     const reader = new FileReader();
    //                     reader.onload = e => {
    //                         this.files.push(e.target.result);
    //                     }
    //                     reader.readAsDataURL(file);
    //                 });
    //             }
    //         },
    //         removeFile(index) {
    //             this.files.splice(index, 1);
    //         }
    //     }
    // }

    function uploadBukti() {
    return {
        files: [],
        dt: new DataTransfer(), // ini buat akumulasi file

        previewFile(event) {
            const input = event.target;
            if (input.files) {
                if (this.files.length + input.files.length > 3) {
                    alert("Maksimal hanya 3 gambar.");
                    input.value = ""; 
                    return;
                }

                Array.from(input.files).forEach(file => {
                    this.files.push(URL.createObjectURL(file));
                    this.dt.items.add(file); // simpan file ke DataTransfer
                });

                // reset input lalu isi ulang dengan semua file yang sudah ada di DataTransfer
                input.files = this.dt.files;
            }
        },

        removeFile(index) {
            this.files.splice(index, 1);
            this.dt.items.remove(index);
            document.querySelector('input[type=file]').files = this.dt.files;
        }
    }
}


    // 2
    // function uploadBukti() {
    //     return {
    //         files: [],
    //         previewFile(event) {
    //             const input = event.target;
    //             if (input.files) {
    //                 if (this.files.length + input.files.length > 3) {
    //                     alert("Maksimal hanya 3 gambar.");
    //                     input.value = ""; // reset input
    //                     return;
    //                 }
    //                 Array.from(input.files).forEach(file => {
    //                     const reader = new FileReader();
    //                     reader.onload = e => {
    //                         this.files.push(e.target.result);
    //                     }
    //                     reader.readAsDataURL(file);
    //                 });
    //             }
    //         },
    //         removeFile(index) {
    //             this.files.splice(index, 1);
    //         }
    //     }
    // }
</script>
