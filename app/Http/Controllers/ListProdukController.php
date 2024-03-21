<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProdukController extends Controller
{
    public function getData()
    {
        $dataBarang = [
            ['id' => 1, 'produk' => "Nike Dunks 123", 'size' => 43, 'harga' => "895.000"],
            ['id' => 2, 'produk' => "Adidas Zero 1", 'size' => 41, 'harga' => "478.000"], 
            ['id' => 3, 'produk' => "Puma Killer2", 'size' => 44, 'harga' => "907.000"], 
            ['id' => 4, 'produk' => "Reebok KW 54", 'size' => 36, 'harga' => "640.000"], 
            ['id' => 5, 'produk' => "Oertuseight Kitviu", 'size' => 39, 'harga' => "560.000"], 

        ];

        return $dataBarang;

    }

    public function tampilkan(){
        $data = $this->getData();
        return view('list_product', compact('data'));
    }
}
