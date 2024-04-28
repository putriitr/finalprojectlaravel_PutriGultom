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

// Route::get('/category', function () {
//     return view('layout.category');
// });

Route::resource('/category',\App\Http\Controllers\categoryController::class);

Route::get('/product', function () {
    return view('layout.product');
});

Route::get('/logout', function () {
    return view('layout.login');
});
