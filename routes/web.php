<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\CustomerAuthController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


// Route Auth
// Customer
Route::middleware('guest:customer')->group(function () {
    Route::get('/login', [CustomerAuthController::class, 'showLogin'])->name('user.login');
    Route::post('/login', [CustomerAuthController::class, 'login'])->name('user.loginController');
    Route::get('/register', [CustomerAuthController::class, 'showRegister'])->name('user.register');
    Route::post('/register', [CustomerAuthController::class, 'register'])->name('register');
});

// Admin
Route::middleware('redirect.admin')->prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.loginController');
});


// Aplikasi //

// Route Admin
Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/create-produk', [AdminController::class, 'createProduct'])->name('admin.products.create');
    Route::get('/update-produk', [AdminController::class, 'updateProduct'])->name('admin.products.update');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});

// Route User
Route::controller(CustomerController::class)->name('user.')->group(function () {
    Route::get('/', 'showHome')->name('home');
    Route::get('/about', 'showAboutUs')->name('about');
    Route::get('/find-your-style', 'showFindYourStyle')->name('findYourStyle');
    Route::get('/katalog', 'showKatalog')->name('katalog');
    Route::get('/product', 'showProduct')->name('product');
});

Route::post('/logout', [CustomerAuthController::class, 'logout'])->name('user.logout');

Route::middleware('auth:customer')->name('user.')->group(function () {
    Route::get('/keranjang', [CustomerController::class, 'showKeranjang'])->name('keranjang');
    Route::get('/pesanan', [CustomerController::class, 'showPesanan'])->name('pesanan');
    Route::get('/pembayaran', [CustomerController::class, 'showPembayaran'])->name('pembayaran');
    Route::get('/testimoni', [CustomerController::class, 'showTestimoni'])->name('testimoni');
    Route::get('/profile', [CustomerController::class, 'showProfile'])->name('profile');
});












