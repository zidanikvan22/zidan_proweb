<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;

Route::get('/listproduk', function () {
    return view('list_product');
});

Route::get('/listproduk', [ListProdukController::class, 'tampilkan']);

