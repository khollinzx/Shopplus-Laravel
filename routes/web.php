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

Route::get('/shopplus', [
    'uses' => 'Controllers\ProductController@getAllProduct',
    'as' => 'product.index'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'Controllers\ProductController@getCartItems',
    'as' => 'product.addToCart'
]);

Route::get('/product/{id}', [
    'uses' => 'Controllers\ProductController@getSingleProduct',
    'as' => 'product.getSingleitem'
]);

Route::get('/show-cart-items', [
    'uses' => 'Controllers\ProductController@showCartItems',
    'as' => 'product.addToCart'
]);

Route::get('/shoppingCart', [
    'uses' => 'Controllers\ProductController@getCart',
    'as' => 'product.listCartItem'
]);

Route::get('/checkouts', [
    'uses' => 'Controllers\ProductController@getCheckout',
    'as' => 'product.checkouts'
]);

Route::post('/pay', [
    'uses' => 'PaymentController@redirectToGateway',
    'as' => 'pay'
]);

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Route::group(['prefix' => 'user'], function () {

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/profile', [
            'uses' => 'Controllers\ProfileController@getUserProfile',
            'as' => 'user.profile'
        ]);

        Route::post('/profile/{id}', [
            'uses' => 'Controllers\ProfileController@postUserProfile',
            'as' => 'user.profile/'
        ]);

        Route::get('/logout', [
            'uses' => 'Controllers\UserController@getLogout',
            'as' => 'user.logout'
        ]);

        Route::get('/show-cart-items', [
            'uses' => 'Controllers\ProductController@showCartItems',
            'as' => 'product.addToCart'
        ]);
    });

    Route::group(['middleware' => 'guest'], function () {
        Route::get('/signup', [
            'uses' => 'Controllers\UserController@getSignup',
            'as' => 'user.signup'
        ]);

        Route::post('/signup', [
            'uses' => 'Controllers\UserController@postSignup',
            'as' => 'user.signup'
        ]);

        Route::get('/login', [
            'uses' => 'Controllers\UserController@getLogin',
            'as' => 'user.login'
        ]);

        Route::post('/login', [
            'uses' => 'Controllers\UserController@postLogin',
            'as' => 'user.login'
        ]);

        Route::get('/show-cart-items', [
            'uses' => 'Controllers\ProductController@showCartItems',
            'as' => 'product.addToCart'
        ]);
    });
});





Route::get('/cart', function () {
    return view('pages.cart');
});



Route::get('/checkout', function () {
    return view('pages.checkout');
});
