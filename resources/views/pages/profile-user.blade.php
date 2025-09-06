<x-layouts.user>
    <div class=" bg-gray-100 flex pt-20 pb-20 px-2 items-center justify-center">
        <div class="relative bg-white p-10 rounded-lg shadow-md w-full max-w-4xl overflow-visible">
            <!-- Title keluar ke atas -->
            <h1 class="absolute -top-10 left-12 text-6xl font-extrabold text-[#ddb135] [text-shadow:_1px_1px_0_#000] ">
                Profile</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-6">
                <!-- Left side (form) -->
                <div class="space-y-6 order-2 md:order-1">
                    <div>
                        <label class="block text-gray-500 text-xs mb-1">USER NAME</label>
                        <input type="text"
                            class="w-full rounded-lg border border-gray-300 
                   focus:border-[#36A4A9] focus:ring-2 focus:ring-[#36A4A944] 
                   outline-none transition duration-200 text-sm px-3 py-2" />
                    </div>
                    <div>
                        <label class="block text-gray-500 text-xs mb-1">E-MAIL</label>
                        <input type="email"
                            class="w-full rounded-lg border border-gray-300 
                   focus:border-[#36A4A9] focus:ring-2 focus:ring-[#36A4A944] 
                   outline-none transition duration-200 text-sm px-3 py-2" />
                    </div>
                    <div>
                        <label class="block text-gray-500 text-xs mb-1">PASSWORD</label>
                        <input type="password"
                            class="w-full rounded-lg border border-gray-300 
                   focus:border-[#36A4A9] focus:ring-2 focus:ring-[#36A4A944] 
                   outline-none transition duration-200 text-sm px-3 py-2" />
                    </div>

                    <div>
                        <label class="block text-gray-500 text-xs mb-1">PHONE</label>
                        <input type="text"
                            class="w-full rounded-lg border border-gray-300 
                   focus:border-[#36A4A9] focus:ring-2 focus:ring-[#36A4A944] 
                   outline-none transition duration-200 text-sm px-3 py-2" />
                    </div>
                    <div>
                        <label class="block text-gray-500 text-xs mb-1">Address</label>
                        <input type="text"
                            class="w-full rounded-lg border border-gray-300 
                   focus:border-[#36A4A9] focus:ring-2 focus:ring-[#36A4A944] 
                   outline-none transition duration-200 text-sm px-3 py-2" />
                    </div>
                </div>

                <!-- Right side (profile image) -->
                <div class="flex flex-col items-center justify-center order-1 md:order-2">
                    <div class="relative">
                        <img src="{{ asset('assets/images/home-category1.png') }}" alt="Profile"
                            class="w-40 h-40 rounded-full object-cover border-4 border-white shadow-md">
                        <label
                            class="absolute bottom-2 right-2 hover:scale-102 transition bg-white p-2 rounded-full shadow cursor-pointer hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h4l2-3h6l2 3h4v13H3V7z" />
                                <circle cx="12" cy="13" r="4" stroke="currentColor" stroke-width="2"
                                    fill="none" />
                            </svg>
                            <input type="file" class="hidden" />
                        </label>
                    </div>
                </div>
            </div>

            <!-- Save button keluar ke bawah -->
            <button
                class="absolute -bottom-6 right-10 px-10 py-3 text-white font-bold rounded-md 
             bg-gradient-to-r from-[#25777a] to-[#164345] cursor-pointer hover:scale-102 hover:opacity-90 transition">
                Simpan
            </button>
        </div>
    </div>

</x-layouts.user>
