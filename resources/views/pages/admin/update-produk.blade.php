<x-layouts.admin>
    <main class="p-6 bg-gray-50 overflow-auto" x-data="uploadBukti()">
        <div class="border-b border-gray-300 mb-5">
            <h2 class="text-2xl font-bold mb-4">Tambah Produk</h2>
        </div>

        {{-- Form Tambah Produk --}}
        <form action="{{ route('admin.products.update', $product->productId) }}" method="POST"
            class="space-y-4 font-serif" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Nama Produk --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4">
                <label for="name" class="text-sm font-medium text-gray-700">Produk Name</label>
                <input type="text" id="productName" name="productName"
                    value="{{ old('productName', $product->productName) }}"
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
                            {{ old('category_id', $product->category_id) == $category->categoryId ? 'selected' : '' }}>
                            {{ $category->categoryName }}</option>
                    @endforeach
                </select>

            </div>

            {{-- <!-- Ukuran Kain --> --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4">
                <label for="size" class="text-sm font-medium text-gray-700">Ukuran Kain</label>
                <input type="text" id="fabricSize" name="fabricSize"
                    value="{{ old('fabricSize', $product->fabricSize) }}"
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
                            {{ old('technique_id', $product->technique_id) == $technique->techniqueId ? 'selected' : '' }}>
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
                            {{ old('material_id', $product->material_id) == $material->materialId ? 'selected' : '' }}>
                            {{ $material->materialName }}</option>
                    @endforeach
                </select>
            </div>

            {{-- <!-- Stock Quantity --> --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4">
                <label for="stockQuantity" class="text-sm font-medium text-gray-700">Stok</label>
                <input type="number" id="stockQuantity" name="stockQuantity"
                    value="{{ old('stockQuantity', $product->stockQuantity) }}"
                    class="md:col-span-3 border border-gray-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400">
            </div>

            {{-- <!-- Price --> --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-4" x-data="{
                displayPrice: '{{ old('price', $product->price) }}',
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


            {{-- Upload & Preview Gambar Produk --}}
            <div class="grid grid-cols-1 md:grid-cols-4 items-start gap-2 md:gap-4">
                <label class="text-sm font-medium text-gray-700">
                    Gambar <br><span class="text-xs text-gray-500">Maks 4 file (.png .jpg)</span>
                </label>

                <div class="md:col-span-3 w-full flex flex-col items-center justify-center border border-gray-300 rounded-lg py-3 hover:bg-gray-100 transition relative cursor-pointer"
                    x-data="uploadBukti({{ $product->images->map(
                        fn($img) => [
                            'id' => $img->productImageId,
                            'url' => asset($img->prodImage),
                        ],
                    ) }})">

                    <!-- input file -->
                    <input type="file" accept="image/*" name="images[]" multiple @change="previewFile"
                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">

                    <!-- placeholder kalau tidak ada gambar -->
                    <div class="flex flex-col items-center justify-center pointer-events-none"
                        x-show="files.length === 0 && oldImages.length === 0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5-5 5 5M12 5v12" />
                        </svg>
                        <span>Upload Gambar Produk</span>
                    </div>

                    <!-- preview gambar -->
                    <div class="grid grid-cols-2 gap-4 mt-4 w-full px-4"
                        x-show="oldImages.length > 0 || files.length > 0">

                        <template x-for="(image, index) in [...oldImages, ...files]" :key="index">
                            <div class="relative w-full h-32" x-show="!image.deleted">
                                <!-- jangan tampilkan kalau sudah dihapus -->

                                <!-- kalau image.id ada berarti gambar lama -->
                                <img :src="image.url ?? image" class="w-full h-32 object-cover rounded border" />

                                <!-- tombol X -->
                                <button type="button"
                                    @click="image.id ? removeOld(index) : removeFile(index - oldImages.length)"
                                    class="absolute top-1 right-1 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center">
                                    X
                                </button>

                                <!-- input hidden buat deleted images -->
                                <template x-if="image.id && image.deleted">
                                    <input type="hidden" name="deleted_images[]" :value="image.id">
                                </template>
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
    function uploadBukti(oldImages = []) {
        return {
            files: [],
            dt: new DataTransfer(),
            oldImages: oldImages.map(img => ({
                ...img,
                deleted: false
            })),

            previewFile(event) {
                const input = event.target;
                const newFiles = Array.from(input.files);

                // Hitung total gambar yang akan ada
                const total =
                    this.oldImages.filter(i => !i.deleted).length +
                    this.files.length +
                    newFiles.length;

                // Jika melebihi batas
                if (total > 4) {
                    alert("Maksimal hanya 4 gambar (gabungan lama + baru).");

                    // Re-sync ulang input biar file lama gak hilang
                    input.value = "";
                    input.files = this.dt.files;
                    return;
                }

                // Tambahkan file baru ke daftar dan DataTransfer
                newFiles.forEach(file => {
                    this.files.push({
                        url: URL.createObjectURL(file),
                        file
                    });
                    this.dt.items.add(file);
                });

                // Update input.files agar sinkron
                input.files = this.dt.files;
            },

            removeFile(index) {
                this.files.splice(index, 1);
                this.dt.items.remove(index);
                document.querySelector('input[type=file]').files = this.dt.files;
            },

            removeOld(index) {
                this.oldImages[index].deleted = true;
            }
        }
    }

    // function uploadBukti(oldImages = []) {
    //     return {
    //         files: [], // preview untuk gambar baru
    //         dt: new DataTransfer(), // akumulasi file baru biar bisa batch
    //         oldImages: oldImages.map(img => ({
    //             ...img,
    //             deleted: false
    //         })), // gambar lama

    //         previewFile(event) {
    //             const input = event.target;
    //             if (input.files) {
    //                 let total = this.oldImages.filter(i => !i.deleted).length +
    //                     this.files.length +
    //                     input.files.length;
    //                 if (total > 4) {
    //                     alert("Maksimal hanya 4 gambar (gabungan lama + baru).");
    //                     input.value = "";
    //                     return;
    //                 }

    //                 Array.from(input.files).forEach(file => {
    //                     this.files.push({
    //                         url: URL.createObjectURL(file)
    //                     });
    //                     this.dt.items.add(file); // masukkan ke DataTransfer
    //                 });

    //                 // reset input lalu isi ulang dengan semua file yang sudah terkumpul
    //                 input.files = this.dt.files;
    //             }
    //         },

    //         removeFile(index) {
    //             this.files.splice(index, 1);
    //             this.dt.items.remove(index);
    //             document.querySelector('input[type=file]').files = this.dt.files;
    //         },

    //         removeOld(index) {
    //             this.oldImages[index].deleted = true;
    //             // jangan splice biar input hidden "deleted_images[]" tetap terkirim
    //         }
    //     }
    // }

    // function uploadBukti(oldImages = []) {
    //     return {
    //         files: [], // gambar baru
    //         oldImages: oldImages.map(img => ({
    //             ...img,
    //             deleted: false
    //         })), // gambar lama
    //         previewFile(event) {
    //             const input = event.target;
    //             if (input.files) {
    //                 if (this.files.length + this.oldImages.filter(i => !i.deleted).length + input.files.length > 3) {
    //                     alert("Maksimal hanya 3 gambar (gabungan lama + baru).");
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
    //         },
    //         removeOld(index) {
    //             this.oldImages[index].deleted = true; // tandai untuk delete
    //             // jangan splice, biar input hidden tetap terkirim!
    //         }
    //     }
    // }
</script>
