<?php

use Illuminate\Support\Facades\Route;


// Route Admin
Route::get('/admin', function() {
    return view('pages.admin.dashboard');
});
Route::get('/admin/orders', function(){
    return view('pages.admin.orders');
});
Route::get('/admin/create-produk', function() {
    return view('pages.admin.create-produk');
});
Route::get('/admin/update-produk', function() {
    return view('pages.admin.update-produk');
});



// Route Auth
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});


// Route User
Route::get('/', function () {
    return view('pages.user.home');
});

Route::get('/about', function () {
    return view('pages.user.about');
});

Route::get('/find-your-style', function () {
    return view('pages.user.find-your-style');
});

Route::get('/katalog', function () {
    return view('pages.user.katalog');
});

Route::get('/profile', function () {
    return view('pages.user.profile-user');
});

Route::get('/keranjang', function () {
    return view('pages.user.keranjang');
});

Route::get('/product', function () {
    return view('pages.user.product');
});

Route::get('/pesanan', function() {
    return view('pages.user.pesanan-user');
});

Route::get('/pembayaran', function() {
    return view('pages.user.pembayaran-user');
});

Route::get('/testimoni', function() {
    return view('pages.user.testimoni-user');
});