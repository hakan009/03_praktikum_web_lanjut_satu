<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function prods() {
        return view('products');
    }

    public function prod1() {
        $produks =['produk 1', 'produk 2'];
        return view('product1', ['produks' => $produks]);
    }
    public function prod2() {
        $produkss =['produk 3', 'produk 4'];
        return view('product2', ['produkss' => $produkss]);
    }
}
