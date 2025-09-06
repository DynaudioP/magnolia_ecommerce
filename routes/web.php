<?php

use Illuminate\Support\Facades\Route;




// Route Auth
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});


// Route User
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/find-your-style', function () {
    return view('pages.find-your-style');
});

Route::get('/profile', function() {
    return view('pages.profile-user');
});