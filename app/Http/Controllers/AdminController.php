<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Material;
use App\Models\Product;
use App\Models\Technique;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        $products = Product::paginate(10);

        return view('pages.admin.dashboard', compact('products'));
    }

    // Orders
    public function orders()
    {
        return view('pages.admin.orders');
    }

    // Create produk
    public function createProduct()
    {
        $categories = Category::all();
        $techniques = Technique::all();
        $materials = Material::all();

        return view('pages.admin.create-produk', compact('categories', 'techniques', 'materials'));
    }

    // Update produk 
    public function updateProduct($id)
    {
        $categories = Category::all();
        $techniques = Technique::all();
        $materials = Material::all();

        $product = Product::with('images')->findOrFail($id);

        return view('pages.admin.update-produk',compact('categories', 'techniques', 'materials', 'product'),);
    }
}
