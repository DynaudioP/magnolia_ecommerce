<x-layouts.user>
    {{-- Wrap Halaman Pembayaran SUer --}}
    <div class="min-h-[70vh] bg-gray-50 font-serif">
        <div class=" max-w-7xl mx-auto p-3 md:p-10">
            <h1 class="font-bold text-2xl">Info Pembayaran</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2" x-data="uploadBukti()">
                {{-- <!-- Card Total Pembayaran --> --}}
                <div class="border border-gray-300  rounded-lg p-4 shadow-sm bg-white">
                    <div class="flex justify-between items-center mb-4">
                        <span class="font-semibold">Total Pembayaran</span>
                        <span class="text-blue-600 font-bold">Rp. 750.000</span>
                    </div>
                    <div class="border border-gray-300 rounded-lg p-3 mb-4">
                        <p class="font-semibold">Bank BCA</p>
                        <p>No Rekening</p>
                        <p>A.N : Fulan</p>
                        <div class="flex justify-between items-center mt-2">
                            <span>675867858949</span>
                            <button class="text-blue-500">Salin</button>
                        </div>
                    </div>

                    {{-- <!-- Upload File Bukti Pembayaran --> --}}
                    <div
                        class="w-full flex flex-col items-center justify-center border border-gray-300 rounded-lg py-3 hover:bg-gray-100 transition relative cursor-pointer">
                        <input type="file" accept="image/*" @change="previewFile"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                        <div class="flex flex-col items-center justify-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5-5 5 5M12 5v12" />
                            </svg>
                            <span>Upload bukti pembayaran</span>
                        </div>
                    </div>

                    {{-- <!-- Preview Gambar --> --}}
                    <template x-if="file">
                        <div class="mt-4 relative mx-auto w-32 h-32">
                            <img :src="file" class="w-32 h-32 object-cover rounded border" />
                            <button @click="removeFile"
                                class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center -translate-x-1/2 -translate-y-1/2">X</button>
                        </div>
                    </template>
                </div>

                {{-- <!-- Card Detail Pesanan --> --}}
                <div class="border border-gray-300 rounded-lg p-4 shadow-sm bg-white">
                    <p class="font-semibold mb-2">Detail Pesanan :</p>
                    <ul class="mb-4 space-y-1">
                        <li>Kain batik khas Solo x1 = <span class="text-blue-600 font-semibold">Rp. 200.000</span> </li>
                        <li>Kebaya Surabaya x1 = <span class="text-blue-600 font-semibold">Rp. 200.000</span></li>
                        <li>Batik Pekalongan x1 = <span class="text-blue-600 font-semibold">Rp. 200.000</span></li>
                        <li>Aksesoris Batik khas Solo x1 = <span class="text-blue-600 font-semibold">Rp. 200.000</span></li>
                        <li>Aksesoris Kebaya Surabaya x1 = <span class="text-blue-600 font-semibold">Rp. 200.000</span></li>
                        <li>Aksesoris Batik Pekalongan x1 = <span class="text-blue-600 font-semibold">Rp. 200.000</span></li>
                    </ul>
                    <p class="font-bold mb-4">Total = <span class="text-green-600 font-bold">Rp. 200.000</span></p>
                    <button
                        class="w-full border border-gray-300 rounded-lg py-2 bg-gray-100 font-semibold hover:bg-gray-200 transition">
                        Status Pesanan : Proses
                    </button>
                </div>
            </div>


        </div>
    </div>
</x-layouts.user>

{{-- Script Function Upload Gambar dan Preview --}}
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
