<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // Menyimpan Gambar
    public function productStore(Request $request)
    {
        $validated = $request->validate([
            'productName' => 'required|string|max:100',
            'category_id' => 'required|integer|exists:categories,id', 
            'fabricSize' => 'required|numeric',
            'technique_id' => 'required|integer|exists:techniques,id',
            'material_id' => 'required|integer|exists:materials,id', 
            'price' => 'required|numeric',
            'stockQuantity' => 'required|numeric',
        ]);

        // Simpan ke DB
        $product = Product::create([
            'productName' => $validated['productName'],
            'category_id' => $validated['category_id'],
            'fabricSize' => $validated['fabricSize'],
            'technique_id' => $validated['technique_id'],
            'material_id' => $validated['material_id'],
            'price' => $validated['price'],
            'stockQuantity' => $validated['stockQuantity'],
        ]);

        return redirect()->back()->with('success', 'Product berhasil ditambahkan!');

    }
}
