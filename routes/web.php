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
    return view('welcome');
});

Route::get('/index', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/shop', function () {
    return view('frontend.shop');
});

Route::get('/ayamku', function () {
    return view('frontend.ayamku');
});

Route::get('/cart', function () {
    return view('frontend.cart');
});

Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/reg', function () {
    return view('frontend.register');
});

Route::get('/checkout', function () {
    return view('frontend.checkout');
});
Route::get('/option', function () {
    return view('admin.index');
});

Route::get('/thankyou', function () {
    return view('frontend.thankyou');
});

Route::get('register', function () {
    return view('auth.register');
});

Route::get('login', function () {
    return view('auth.login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){
    route::resource('barang','barangController');
    route::resource('pembeli','PembeliController');
    route::resource('dataayam','DataayamController');
});
