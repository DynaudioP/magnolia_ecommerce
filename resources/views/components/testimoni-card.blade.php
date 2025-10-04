<div x-data="{ open: false, modalImage: '' }"
    class="rounded-xl border border-gray-300 shadow-[0_4px_20px_rgba(0,0,0,0.06)] px-4 py-2 space-y-1">
    {{-- Profile --}}
    <div class="flex items-center gap-3">
        <img src="{{ asset('assets/images/home-category1.png') }}" alt="Profile"
            class="w-10 h-10 rounded-full object-cover border-4 border-white shadow-md">
        <h3 class="font-bold">Michael Jordan</h3>
    </div>

    {{-- Text + Image --}}
    <div class="flex items-center flex-wrap-reverse gap-3">
        <p class="line-clamp-4 text-sm flex-1">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua.
        </p>
        <img src="{{ asset('assets/images/home-carousel2.png') }}"
            @click="modalImage = '{{ asset('assets/images/home-carousel2.png') }}'; open = true"
            class="h-30 sm:h-24 w-full sm:w-32 rounded-xl object-cover cursor-pointer hover:opacity-80 transition">
    </div>

    {{--  Modal --}}
    <div x-cloak x-show="open" x-transition class="fixed inset-0 bg-black/70 flex items-center justify-center z-50"
        @click.self="open = false">
        <div class="relative">
            {{-- Tombol Close --}}
            <button @click="open = false"
                class="absolute -top-4 -right-4 bg-white text-black rounded-full w-8 h-8 flex items-center justify-center shadow-md">
                ✕
            </button>
            {{-- Gambar Besar --}}
            <img :src="modalImage" alt="Preview" class="max-h-[80vh] max-w-[90vw] rounded-lg shadow-lg">
        </div>
    </div>
</div>
