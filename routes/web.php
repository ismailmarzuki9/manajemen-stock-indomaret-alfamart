<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\Produkcontroller;
use App\Http\Controllers\kategoricontroller;
use App\Http\Controllers\ordercontroller;
use App\Http\Controllers\stockcontroller;
use App\Http\Controllers\suppliersControl;
use App\Http\Controllers\tokocontroller;

use Illuminate\Support\Facades\Route;
    
use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class);


Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('/production',[Produkcontroller::class, 'index']);
Route::resource('produk', Produkcontroller::class);
Route::resource('kategori',kategoricontroller::class);
Route::resource('order', ordercontroller::class);
Route::resource('stock', stockcontroller::class);
Route::resource('suppliers', suppliersControl::class);
Route::resource('toko', tokocontroller::class);
Route::resource('toko', tokocontroller::class);