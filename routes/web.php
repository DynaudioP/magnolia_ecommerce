<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\CustomerAuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
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
    // GET ROUTES
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/produk/create', [AdminController::class, 'createProduct'])->name('admin.products.create');
    Route::get('/produk/update/{id}', [AdminController::class, 'updateProduct'])->name('admin.products.edit');

    // CREATE ROUTES
    Route::post('/produk/create', [ProductController::class, 'productStore'])->name('admin.products.store');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    // UPDATE ROUTES
    Route::put('/produk/update/{id}', [ProductController::class, 'productUpdate'])->name('admin.products.update');

    // DELETE ROUTES
    Route::delete('/produk/{id}', [ProductController::class, 'productDelete'])->name('admin.products.delete');

});

// Route User
Route::name('user.')->group(function () {
    Route::get('/', [CustomerController::class, 'showHome'])->name('home');
    Route::get('/about', [CustomerController::class, 'showAboutUs'])->name('about');
    Route::get('/find-your-style', [CustomerController::class, 'showFindYourStyle'])->name('findYourStyle');

    // Route Get Katalog & Produk
    Route::get('/katalog', [CustomerController::class, 'showKatalog'])->name('katalog');
    Route::get('/product/{id}', [CustomerController::class, 'showProduct'])->name('product');
});

Route::post('/logout', [CustomerAuthController::class, 'logout'])->name('user.logout');

Route::middleware('auth:customer')->name('user.')->group(function () {
    Route::get('/keranjang', [CustomerController::class, 'showKeranjang'])->name('keranjang');
    Route::get('/pesanan', [CustomerController::class, 'showPesanan'])->name('pesanan');
    Route::get('/pembayaran', [CustomerController::class, 'showPembayaran'])->name('pembayaran');
    Route::get('/testimoni', [CustomerController::class, 'showTestimoni'])->name('testimoni');
    Route::get('/profile', [CustomerController::class, 'showProfile'])->name('profile');
});












