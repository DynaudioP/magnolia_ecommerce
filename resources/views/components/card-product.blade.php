<a href="/product/{{$productId ?? '#'}}">
    <div class="bg-gray-50 rounded-2xl relative cursor-pointer hover:scale-101 transition">

        <!-- Gambar Produk -->
        <img src="{{ asset($prodImage ?? 'assets/images/catalog1.jpg')  }}" alt="Product"
            class="rounded-lg mb-1 w-full h-38 md:h-64 object-cover">

        <!-- Kategori -->
        <p class="text-gray-400 text-sm">{{ $category ?? 'Batik'}}</p>

        <!-- Nama Produk -->
        <h3 class="text-gray-800 font-medium mb-2">{{ $productName ?? 'Kain Batik Khas Sol' }}</h3>

        <!-- Harga dan Stock-->
        <div class="flex justify-between items-center flex-wrap">
            <p class="text-sky-600 font-semibold">Rp. {{ number_format($price ?? 200000, 0, ',', '.') }},-</p>
            @if (($stockQuantity ?? 12) < 10)
                <p class="text-red-500 text-xs">{{$stockQuantity ?? 5}} barang tersisa!</p>
            @endif
        </div>
    </div>
</a>
