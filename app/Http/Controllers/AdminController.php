<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        return view('pages.admin.dashboard');
    }

    // Orders
    public function orders()
    {
        return view('pages.admin.orders');
    }

    // Create produk
    public function createProduct()
    {
        return view('pages.admin.create-produk');
    }

    // Update produk
    public function updateProduct()
    {
        return view('pages.admin.update-produk');
    }
}
