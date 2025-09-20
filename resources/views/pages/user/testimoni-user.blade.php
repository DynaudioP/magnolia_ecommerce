<x-layouts.user>
    {{-- Wrap Halaman Testimoni --}}
    <div class="min-h-[70vh] bg-gray-50 font-serif">

        {{-- Formulir Testimoni --}}
        <div class=" max-w-7xl mx-auto p-3 md:p-10" x-data="uploadBukti()">
            <h1 class="font-bold text-2xl">Formulir Testimoni</h1>
            <div class="flex gap-3 flex-wrap mb-5">
                <label for="testimoni">Testimoni Anda</label>
                <textarea
                    class="w-full min-h-[20vh] border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none"
                    name="testimoni" id=""></textarea>
            </div>
            <div class="flex gap-3 flex-wrap mb-6">
                <label for="testimoni">Gambar <br><span class="text-sm">Menerima .png .jpg</span></label>
                {{-- Upload Gambar Testimoni --}}
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
                        <span>Upload bukti pembayaran</span>
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
            {{-- Button Submit --}}
            <div class="flex justify-end">
                <button class="bg-green-600 text-white py-2 px-3 rounded w-48 font-semibold">Submit</button>
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
