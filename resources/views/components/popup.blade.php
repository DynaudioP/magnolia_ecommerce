<div x-cloak x-data="{ show: {{ session('success') || session('error') ? 'true' : 'false' }} }" x-init="if (show) { setTimeout(() => show = false, 4000) }" x-show="show" x-transition.opacity.duration.500ms
    class="fixed inset-0 flex items-center justify-center bg-black/50 z-60">
    <!-- Modal Content -->
    <div x-transition.scale.duration.500ms
        class="bg-white rounded-2xl shadow-2xl p-8 flex flex-col items-center space-y-4 max-w-sm w-full">
        <!-- Dynamic Icon -->
        @if (session('success'))
            <div class="relative">
                <div class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center absolute animate-ping">
                </div>
                <div class="w-20 h-20 rounded-full bg-green-500 flex items-center justify-center relative z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white animate-bounce" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
            </div>
        @elseif(session('error'))
            <div class="relative">
                <div class="w-20 h-20 rounded-full bg-red-100 flex items-center justify-center absolute animate-ping">
                </div>
                <div class="w-20 h-20 rounded-full bg-red-500 flex items-center justify-center relative z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white animate-shake" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>
        @endif

        <!-- Message -->
        <h2 class="text-2xl font-bold text-gray-800">
            @if (session('success'))
                Berhasil!
            @elseif(session('error'))
                Gagal!
            @endif
        </h2>
        <p class="text-gray-600 text-center">
            {{ session('success') ?? session('error') }}
        </p>

        <button @click="show = false"
            class="mt-4 px-5 py-2 
                   @if (session('success')) bg-green-500 hover:bg-green-600 
                   @elseif(session('error')) bg-red-500 hover:bg-red-600 @endif
                   text-white rounded-lg transition">
            Tutup
        </button>
    </div>
</div>
