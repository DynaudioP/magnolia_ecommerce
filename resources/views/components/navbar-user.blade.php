{{-- Navigasi Bar --}}
<nav x-data="{ open: false }" class="flex justify-between items-center mx-auto py-3 px-6 lg:px-12 z-50 shadow-sm">
    <div>
        <a href="/"><img class="w-32 cursor-pointer" src="{{ asset('assets/images/logo.png') }}" alt="..."></a>
    </div>
    <div class="hidden md:flex">
        <ul>
            <li class="flex space-x-7">
                <a href="/about"
                    class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                    About Us
                </a>
                <a href="#"
                    class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                    Katalog
                </a>
                <a href="/find-your-style"
                    class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                    Find Your Style
                </a>
                <a href="#"
                    class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                    Keranjang
                </a>
                <a href="#"
                    class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                    Pesanan
                </a>
            </li>
        </ul>
    </div>

    <div class="px-5 py-2 bg-white mr-3 rounded-sm hidden md:block">
        <a href="/login" class=" text-[#36A4A9] font-semibold">Masuk</a>
    </div>

    {{-- Icon Hamburger icon mode Mobile --}}
    <button @click="open = !open" class="md:hidden">
        <svg x-show="!open" class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg x-show="open" class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    {{-- Overlay BG blur saat membuka navigasi Mobile --}}
    <div x-show="open" x-transition.opacity  class="fixed z-40 inset-0 bg-black/20 backdrop-blur-[1px] "
        @click="open = false">
    </div>

    {{-- Navigasi mode Mobile --}}
    <div x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4" id="menu"
        class="absolute top-0 left-0 w-full bg-gradient-to-r from-[#25777a] to-[#164345] z-60">
        <div class="flex items-center px-8 py-5">
            <div class="mx-auto translate-x-3">
                <a href="/"><img class="w-32 cursor-pointer" src="{{ asset('assets/images/logo.png') }}"
                        alt="..."></a>
            </div>

            <button @click="open = !open" class="lg:hidden">
                <svg x-show="!open" class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <ul class="flex flex-col items-center space-y-4 p-6">
            <li><a href="/about"
                    class="relative text-lg text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                    About Us
                </a></li>
            <li><a href="#"
                    class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                    Katalog
                </a></li>
            <li><a href="/find-your-style"
                    class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                    Find Your Style
                </a></li>
            <li><a href="#"
                    class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                    Keranjang
                </a></li>
            <li>
                <a href="#"
                    class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                    Pesanan
                </a>
            </li>
        </ul>
    </div>

</nav>
