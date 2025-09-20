<x-layouts.user title="About Us">
    <section class="bg-gray-50 py-20">
        <div class="container mx-auto px-8 grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
            <!-- Sisi Kiri: Text -->
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Tentang Kami
                </h2>
                <p class="text-lg text-gray-600 mb-6">
                    Kami percaya bahwa gaya adalah ekspresi diri. Dengan koleksi pakaian yang nyaman dan stylish,
                    kami hadir untuk menemani keseharianmu—baik untuk bekerja, bersantai, atau bersosialisasi.
                </p>
                <p class="text-lg text-gray-600">
                    Misi kami adalah menghadirkan produk yang tidak hanya indah dipakai,
                    tapi juga membuatmu merasa percaya diri di setiap momen.
                </p>
            </div>

            <!-- Sisi Kanan: Image -->
            <div class="relative">
                <img src="{{ asset('assets/images/home-carousel1.png') }}" alt="Tentang Kami"
                    class="rounded-xl shadow-lg w-full object-cover">
                <!-- optional gambar overlay di depan -->
                <div class="absolute -bottom-6 -left-6  shadow-md rounded-lg  w-3/4">
                    <img src="{{ asset('assets/images/home-carousel2.png') }}" alt="Tentang Kami"
                        class="rounded-xl shadow-lg w-full object-cover">
                </div>
            </div>

        </div>

        <div class="container mx-auto px-8 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Sisi Kiri: Image -->
            <div class="relative">
                <img src="{{ asset('assets/images/home-carousel1.png') }}" alt="Tentang Kami"
                    class="rounded-xl shadow-lg w-full object-cover">
                <!-- optional gambar overlay di depan -->
                <div class="absolute -bottom-6 -left-6  shadow-md rounded-lg  w-3/4">
                    <img src="{{ asset('assets/images/home-carousel2.png') }}" alt="Tentang Kami"
                        class="rounded-xl shadow-lg w-full object-cover">
                </div>
            </div>

            <!-- Sisi Kanan: Text -->
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Sejak Kapan?
                </h2>
                <p class="text-lg text-gray-600 mb-6">
                    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo.
                </p>
                <p class="text-lg text-gray-600">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem.
                </p>
            </div>

        </div>

    </section>
</x-layouts.user>
