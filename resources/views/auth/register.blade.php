<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Magnolia | Register</title>
</head>

<body>
    {{-- Wrap Layar --}}
    <div class="flex flex-col lg:flex-row min-h-screen bg-gray-100">

        <!-- Sisi Kiri (Register) -->
        <div class="flex flex-col justify-center items-center w-full lg:w-1/2 p-6 gap-5">
            <h1 class="text-center text-2xl font-bold">Welcome to Magnolia <br> Kebaya and Batik</h1>
            <div class="bg-white rounded-xl border border-gray-200 px-6 lg:px-12 py-13 w-full max-w-md shadow">
                <div>
                    <h4 class="text-xl font-bold">PENDAFTARAN</h4>
                    <h6 class="text-xs text-gray-400">
                        Daftar untuk dapat membeli produk
                        <span class="text-[#36A4A9] font-medium hover:underline">Magnolia</span>
                    </h6>
                </div>

                <!-- Form -->
                <form action="" class="flex flex-col gap-5 mt-6">
                    <div>
                        <p class="text-sm mb-1">Username</p>
                        <input type="text"
                            class="w-full px-3 py-1 rounded-lg border border-gray-300 
                   focus:border-[#36A4A9] focus:ring-2 focus:ring-[#36A4A944] 
                   outline-none transition duration-200"
                            >
                    </div>

                    <div>
                        <p class="text-sm mb-1">Password</p>
                        <input type="password"
                            class="w-full px-3 py-1 rounded-lg border border-gray-300 
                   focus:border-[#36A4A9] focus:ring-2 focus:ring-[#36A4A944] 
                   outline-none transition duration-200"
                            >
                    </div>

                    <div>
                        <p class="text-sm mb-1">Email</p>
                        <input type="email"
                            class="w-full px-3 py-1 rounded-lg border border-gray-300 
                   focus:border-[#36A4A9] focus:ring-2 focus:ring-[#36A4A944] 
                   outline-none transition duration-200"
                            >
                    </div>

                    <div>
                        <p class="text-sm mb-1">Phone</p>
                        <input type="tel"
                            class="w-full px-3 py-1 rounded-lg border border-gray-300 
                   focus:border-[#36A4A9] focus:ring-2 focus:ring-[#36A4A944] 
                   outline-none transition duration-200"
                            >
                    </div>

                    <div>
                        <p class="text-sm mb-1">Address</p>
                        <input type="text"
                            class="w-full px-3 py-1 rounded-lg border border-gray-300 
                   focus:border-[#36A4A9] focus:ring-2 focus:ring-[#36A4A944] 
                   outline-none transition duration-200"
                            >
                    </div>

                    <a href="/"><button
                            class="cursor-pointer hover:scale-[1.01] px-5 py-2 rounded-lg font-semibold hover:text-[#36A4A9] hover:bg-white border-2 border-[#36A4A9] transition text-white bg-gradient-to-r bg-[#36A4A9] focus:outline-none focus:ring-4 focus:ring-[#36A4A944]">
                            Masuk </button></a>
                </form>
            </div>
        </div>

        <!-- Sisi Kanan -->
        <div class="hidden lg:flex w-full lg:w-1/2 items-center justify-center ">
            <div class="hidden lg:flex w-full h-full p-5 items-center justify-center">
                <div class="w-full  h-full">
                    <img class="w-full h-full object-cover rounded-xl" src="{{ asset('assets/images/login-bg.png') }}"
                        alt="">
                </div>
            </div>

        </div>
    </div>


    {{-- <div class="flex items-center bg-gray-100 min-h-screen">
        <div class="flex flex-col justify-center items-center w-1/2">
            <h1 class="text-center text-2xl">Welcome to Magnolia <br> Kebaya and Batik</h1>
            <div class="bg-white rounded-md flex flex-col rounded-lg border border-gray-200 px-8 py-12 gap-2">
                <div>
                    <h4 class="text-xl font-bold">LOGIN</h4>
                    <h6 class="text-sm">Tidak memiliki akun? <span>Daftar</span></h6>
                </div>
                <form action="" class="flex flex-col gap-5 mt-4">
                    <div>
                        <p class="text-sm mb-1">Username</p>
                        <input type="text"
                            class="w-full px-2 py-2 rounded-lg border border-gray-200 focus:border-[#36A4A9] 
         outline-none transition duration-200"
                            required>
                    </div>
                    <div>
                        <p class="text-sm mb-1">Password</p>
                        <input type="password"
                            class="px-2 py-2 rounded-lg border border-gray-200 focus:border-[#36A4A9] 
         outline-none transition duration-200"
                            required>
                        <h4 class="text-[#36A4A9] text-end mt-1 text-xs">Lupa Password?</h4>
                    </div>
                    <button
                        class="cursor-pointer hover:scale-[1.01] px-5 py-2 rounded-lg font-semibold hover:text-[#36A4A9] hover:bg-white border-2 border-[#36A4A9] transition text-white bg-gradient-to-r bg-[#36A4A9] focus:outline-none focus:ring-4 focus:ring-[#36A4A944]">
                        Outline → Fill </button>



                </form>

            </div>

        </div>
        <div class="w-1/2">
            helo
        </div>

    </div> --}}
</body>

</html>
