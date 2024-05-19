<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;
use App\Http\Controllers\ProdukController;


Route::get('/listproduk', function () {
    return view('list_product');
});

Route::get('/listproduk', function () {
    return view('list_product');
});

Route::get('/produk', function () {
    return view('Produk');
});

Route::get('/listproduk', [ListProdukController::class, 'tampilkan']);

Route::get('/produk', [ProdukController::class, 'show']);

Route::post('/produk', [ProdukController::class, 'simpan'])->name('produk.simpan' );



