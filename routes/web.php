<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/signup', function () {
    return view('pages.signup');
});

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});
