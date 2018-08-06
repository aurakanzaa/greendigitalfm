<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class HomeController extends Controller
{
    //
    public function index(){
        return view('homepagecoba');
    }

    public function getProducts(){
      $products = Produk::all();

      return view('homepagecoba')->with('products', $products);
    }

    public function getCategory(Request $request){
        $id = $request->input('id_category');
        $details = Produk::where('ID_KATEGORI', $id)->get();

        return view('category')->with('details', $details);
    }

    public function getSingle($id_sayur){
        $single = Produk::where('ID_SAYUR', $id_sayur)->get();

        return view('single')->with('single', $single);
    }
}
