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
                <a href="/katalog"
                    class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                    Katalog
                </a>
                <a href="/find-your-style"
                    class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                    Find Your Style
                </a>
                @auth('customer')
                    <a href="/keranjang"
                        class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                        Keranjang
                    </a>
                    <a href="/pesanan"
                        class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                        Pesanan
                    </a>
                @endauth
            </li>
        </ul>
    </div>

    @guest('customer')
        <div class="px-5 py-2 bg-white mr-3 rounded-sm hidden md:block">
            <a href="/login" class=" text-[#36A4A9] font-semibold">Masuk</a>
        </div>
    @endguest

    {{-- Dropdown Profile User --}}
    @auth('customer')
        <form action="{{ route('user.logout') }}" method="POST" class="relative">
            @csrf
            <div x-data="{ open: false }" class="relative md:block hidden">
                {{-- <!-- Tombol Profile --> --}}
                <div @click="open = !open" class="cursor-pointer rounded-4xl p-2 bg-[#36A4A9]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                    </svg>
                </div>

                {{-- <!-- Dropdown Menu --> --}}
                <div x-show="open" x-cloak @click.outside="open = false" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95"
                    class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg py-4 px-3 z-50">
                    <ul class="flex flex-col gap-3">
                        <!-- Profile -->
                        <a href="/profile">
                            <li
                                class="flex items-center gap-2 p-2 rounded hover:bg-[#36A4A9]/70 hover:text-white transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#36A4A9]" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                </svg>
                                Profile
                            </li>
                        </a>

                        <!-- Testimoni -->
                        <a href="/testimoni">
                            <li
                                class="flex items-center gap-2 p-2 rounded hover:bg-[#36A4A9]/70 hover:text-white transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4.844-1.326L3 20l1.326-4.844A9.77 9.77 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                                Testimoni
                            </li>
                        </a>

                        <!-- Logout -->
                        <form action="{{ route('user.logout') }}" method="POST">
                            @csrf
                            <li class="flex items-center gap-2 p-2 rounded hover:bg-red-600/50 hover:text-white transition-colors duration-200 cursor-pointer"
                                onclick="this.closest('form').submit()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
                                </svg>
                                Logout
                            </li>
                        </form>
                    </ul>
                </div>
            </div>
        </form>
    @endauth

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
    <div x-show="open" x-cloak x-transition.opacity class="fixed z-40 inset-0 bg-black/20 backdrop-blur-[1px] "
        @click="open = false">
    </div>

    {{-- Navigasi mode Mobile --}}
    <div x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4" id="menu"
        class="absolute top-0 left-0 w-full bg-gradient-to-r from-[#25777a] to-[#164345] z-60 block md:hidden">
        <div class="flex items-center px-8 py-5">
            <div class="mx-auto translate-x-3">
                <a href="/"><img class="w-32 cursor-pointer" src="{{ asset('assets/images/logo.png') }}"
                        alt="..."></a>
            </div>

            <button @click="open = !open" class="lg:hidden">
                <svg x-show="!open" class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                    stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                    stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <ul class="flex flex-col items-center space-y-4 p-6">
            <li><a href="/about"
                    class="relative text-lg text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                    About Us
                </a></li>
            <li><a href="/katalog"
                    class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                    Katalog
                </a></li>
            <li><a href="/find-your-style"
                    class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                    Find Your Style
                </a></li>

            
            @auth('customer')
                <li><a href="/keranjang"
                        class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                        Keranjang
                    </a></li>
                <li>
                    <a href="/pesanan"
                        class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                        Pesanan
                    </a>
                </li>

                <li>
                    <a href="/testimoni"
                        class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                        Testimoni
                    </a>
                </li>
                <form action="{{ route('user.logout') }}" method="POST">
                    @csrf
                    <li>
                        <button type="submit"
                            class="relative flex text-red-500 pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-red-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
                            </svg> Logout
                        </button>
                    </li>
                </form>
            @endauth
            @guest('customer')
                <li>
                    <a href="/login"
                        class="relative text-white pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-white after:transition-all after:duration-300 hover:after:w-full">
                        Masuk
                    </a>
                </li>
            @endguest
        </ul>
    </div>

</nav>
