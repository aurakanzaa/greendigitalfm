<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\models\Produk;

class singleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('single');
    }

    public function getPackage(){
      $infoProduk = Produk::all();

      return view('single')->with('infoProduk', $infoProduk);
    }

    public function getPackageDetails(Request $request){
      $id = $request->input('ID_SAYUR');
      $details = Produk::where('NAMA_SAYUR', $id)->get();
      $details = Produk::where('DESKRIPSI_SAYUR', $id)->get();

      return view('package-details')->with('details', $details);
    }

}
