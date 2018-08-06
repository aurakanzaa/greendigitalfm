<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
{
    //
    public function index(){
        $products = Produk::all();

        return view('produk')->with('products', $products);
    }
}
