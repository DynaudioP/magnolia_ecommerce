<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Function Return View ke User
    public function showHome() {
        return view('pages.user.home');
    }

    public function showAboutUs() {
        return view('pages.user.about');
    }

    public function showKatalog() {
        return view('pages.user.katalog');
    }
    
    public function showFindYourStyle() {
        return view('pages.user.find-your-style');
    }

    public function showProduct() {
        return view('pages.user.product');
    }

    public function showKeranjang() {
        return view('pages.user.keranjang');
    }

    public function showPesanan() {
        return view('pages.user.pesanan-user');
    }

    public function showPembayaran() {
        return view('pages.user.pembayaran-user');
    }

    public function showTestimoni() {
        return view('pages.user.testimoni-user');
    }
    
    public function showProfile() {
        return view('pages.user.profile-user');
    }
}
