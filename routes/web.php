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

Route::controller(BarangController::class)->prefix('barang')->group(function(){
    Route::get('','index')->name('barang');
    Route::get('tambah','tambah')->name('barang.tambah');
    Route::post('tambah','simpan')->name('barang.tambah.simpan');
    Route::get('update/{id}','update')->name('barang.update');
    Route::post('update/{id}','edit')->name('barang.tambah.edit');
    Route::get('delete/{id}','delete')->name('barang.delete');
});

Route::controller(TransaksiController::class)->prefix('transaksi')->group(function(){
    Route::get('','index')->name('transaksi');
    Route::get('tambah','tambah')->name('transaksi.tambah');
    Route::post('tambah','simpan')->name('transaksi.tambah.simpan');
    Route::get('update/{id}','update')->name('transaksi.update');
    Route::put('update/{id}','edit')->name('transaksi.tambah.edit');
    Route::get('delete/{id}','delete')->name('transaksi.delete');
});

Route::controller(LaporanController::class)->prefix('laporan')->group(function(){
    Route::get('','index')->name('laporan');
    Route::post('print','laporanPrint')->name('laporan.print');
});



