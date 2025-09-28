<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Magnolia Kebaya & Batik | {{ $title ?? '' }}</title>
</head>

<body>
    {{-- Wrap Halaman --}}
    <x-popup/>
    <div class="bg-gradient-to-r from-[#25777a] to-[#164345] min-h-screen grid grid-rows-[auto_1fr_auto] z-50"
        x-data="{ open: false }">

        {{-- Header Halaman admin --}}
        <header
            class="bg-gradient-to-r from-[#25777a] to-[#164345] shadow-md flex justify-between px-7 py-2 items-center z-60">
            <div class="">
                <a href="/"><img class="w-30 cursor-pointer" src="{{ asset('assets/images/logo.png') }}"
                        alt="..."></a>
            </div>
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
        </header>
        <!-- Backdrop Background gelap-->
        <div x-show="open" @click="open = false" x-transition:enter="transition-opacity ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/30 z-50 md:hidden">
        </div>

        <div class="grid md:grid-cols-[250px_1fr] flex-1 min-h-[calc(100vh-64px)] relative">

            {{-- Navbar/aside Admin --}}
            <x-navbar-admin />

            {{-- Main Content --}}
            {{ $slot }}
        </div>

        {{-- Footer Admin --}}
        <x-footer-admin />
    </div>
    
</body>

</html>
