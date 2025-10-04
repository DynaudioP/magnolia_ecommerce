<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    // Create Produk Baru
    public function productStore(Request $request)
    {
        $validated = $request->validate([
            'productName' => 'required|string|max:100',
            'category_id' => 'required|integer|exists:category,categoryId',
            'fabricSize' => 'required|numeric',
            'technique_id' => 'required|integer|exists:technique,techniqueId',
            'material_id' => 'required|integer|exists:material,materialId',
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

        // Logika jika produk memiliki gambar yang diupload
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {

                // Path URL gambar ke storage/app/public/products
                $path = $image->store('products', 'public');

                ProductImage::create([
                    'product_id' => $product->productId,
                    'prodImage' => 'storage/' . $path,
                ]);
            }
        }

        // Return Kembali ke Dashboard
        return redirect()->route('admin.dashboard')->with('success', 'Product berhasil ditambahkan!');

    }


    // Update produk
    public function productUpdate(Request $request, $id)
    {
        // Validasi
        $validated = $request->validate([
            'productName' => 'required|string|max:100',
            'category_id' => 'required|exists:category,categoryId',
            'fabricSize' => 'required|numeric',
            'technique_id' => 'required|exists:technique,techniqueId',
            'material_id' => 'required|exists:material,materialId',
            'price' => 'required|numeric',
            'stockQuantity' => 'required|numeric',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);

        // Update data utama
        $product = Product::findOrFail($id);
        $product->update($validated);

        // --- Handle Gambar ---

        // 1. Hapus gambar lama kalau ada di input hidden "deleted_images[]"
        if ($request->has('deleted_images')) {
            foreach ($request->deleted_images as $imageId) {
                $img = ProductImage::find($imageId);
                if ($img) {
                    // Hapus file fisik
                    if (Storage::disk('public')->exists(str_replace('storage/', '', $img->prodImage))) {
                        Storage::disk('public')->delete(str_replace('storage/', '', $img->prodImage));
                    }
                    // Hapus record db
                    $img->delete();
                }
            }
        }

        // 2. Upload gambar baru kalau ada
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                ProductImage::create([
                    'product_id' => $product->productId,
                    'prodImage' => 'storage/' . $path,
                ]);
            }
        }

        return redirect()->route('admin.dashboard')->with('success', 'Produk berhasil diperbarui.');
    }

    public function productDelete($id)
    {
        $product = Product::findOrFail($id);

        // Hapus File Gambar dari Storage
        foreach ($product->images as $image) {
            $path = str_replace('storage/', '', $image->prodImage);

            if ($path && Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
        }
        $product->delete();



        return redirect()->route('admin.dashboard')->with('success', 'Produk berhasil dihapus.');
    }
}
