<?php

namespace App\Http\Controllers;

use App\Models\Accessories;
use App\Models\Category;
use App\Models\LiningOption;
use App\Models\Material;
use App\Models\ModelType;
use App\Models\Product;
use App\Models\Technique;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Function Return View ke User
    public function showHome()
    {
        $products = Product::with(['category', 'material', 'technique', 'images'])->get();
        return view('pages.user.home', compact('products'));
    }

    public function showAboutUs()
    {
        return view('pages.user.about');
    }

    public function showKatalog(Request $request)
    {
        $query = Product::with(['category', 'material', 'technique', 'images']);

        $request->validate([
            'categories' => 'array',
            'categories.*' => 'integer|exists:category,categoryId',
            'materials' => 'array',
            'materials.*' => 'integer|exists:material,materialId',
            'techniques' => 'array',
            'techniques.*' => 'integer|exists:technique,techniqueId',
        ]);

        $query = Product::with(['category', 'material', 'technique', 'images'])
            ->when(
                $request->filled('categories'),
                fn($q) =>
                $q->whereIn('category_id', $request->categories)
            )
            ->when(
                $request->filled('materials'),
                fn($q) =>
                $q->whereIn('material_id', $request->materials)
            )
            ->when(
                $request->filled('techniques'),
                fn($q) =>
                $q->whereIn('technique_id', $request->techniques)
            )->when(
                $request->filled('search'),
                fn($q) => $q->where('productName', 'like', "%{$request->search}%")
            );

        // Pagination
        $products = $query->paginate(9)->withQueryString();

        // Ambil semua nama produk untuk dropdown rekomendasi
        $suggestions = Product::select('productName')->distinct()->pluck('productName');

        // Passing data
        return view('pages.user.katalog', [
            'products' => $products,
            'categories' => Category::all(),
            'materials' => Material::all(),
            'techniques' => Technique::all(),
            'suggestions' => $suggestions,
        ]);
    }

    public function showFindYourStyle()
    {
        return view('pages.user.find-your-style');
    }

    public function showProduct($id)
    {
        $product = Product::with(['category', 'material', 'technique', 'images'])->findOrFail($id);
        $modelType = ModelType::all();
        $liningOption = LiningOption::all();
        $accessories = Accessories::all();

        return view('pages.user.product', compact('product', 'modelType', 'liningOption', 'accessories'));
    }

    public function showKeranjang()
    {
        return view('pages.user.keranjang');
    }

    public function showPesanan()
    {
        return view('pages.user.pesanan-user');
    }

    public function showPembayaran()
    {
        return view('pages.user.pembayaran-user');
    }

    public function showTestimoni()
    {
        return view('pages.user.testimoni-user');
    }

    public function showProfile()
    {
        return view('pages.user.profile-user');
    }
}
