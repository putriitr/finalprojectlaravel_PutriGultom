<?php

use Illuminate\Support\Facades\Route;

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
    return view('layout.login');
});

Route::get('/register', function () {
    return view('layout.register');
});

Route::get('/index', function () {
    return view('layout.index');
});

Route::get('/about', function () {
    return view('layout.about');
});

Route::get('/contact', function () {
    return view('layout.contact');
});

Route::get('/category', function () {
    return view('layout.category');
});

Route::get('/product', function () {
    return view('layout.product');
});

Route::get('/logout', function () {
    return view('layout.login');
});

Route::get('/laptop', function () {
    return view('items.laptop');
});

Route::get('/earbud', function () {
    return view('items.earbud');
});

Route::get('/iron', function () {
    return view('items.iron');
});

Route::get('/microwave', function () {
    return view('items.microwave');
});
Route::get('/mouse', function () {
    return view('items.mouse');
});

Route::get('/printer', function () {
    return view('items.printer');
});

Route::get('/refrigerator', function () {
    return view('items.refrigerator');
});

Route::get('/smartphone', function () {
    return view('items.smartphone');
});

Route::get('/speaker', function () {
    return view('items.speaker');
});

Route::get('/tv', function () {
    return view('items.tv');
});
Route::get('/vacuum', function () {
    return view('items.vacuum');
});

Route::get('/washing', function () {
    return view('items.washing');
});

Route::get('/transaction', function () {
    return view('layout.transaction');
});
