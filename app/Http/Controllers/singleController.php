<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Keranjang;
use App\Models\DetailKeranjang;
use Auth;

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
    
    public function addCart(Request $request, $id_sayur){ 
      $id = Auth::user()->ID_USER; 
      $qty = $request->input('qty'); 
      $sayur = Produk::where('ID_SAYUR', $id_sayur)->first(); 
      $idcreate = Keranjang::where('ID_USER', $id)->where('STATUS_KERANJANG', 0)->first();
      if($idcreate == null){ 
        Keranjang::create([ 
          'ID_USER' => $id, 
        ]); 
 
        $keranjang = Keranjang::where('ID_USER', $id)->first();
        $idkeranjang = $keranjang->ID_KERANJANG;

        DetailKeranjang::create([ 
          'ID_SAYUR' => $id_sayur, 
          'ID_KERANJANG' => $idkeranjang, 
          'ID_USER' => $id, 
          'TOTAL_HARGA_ITEM' => $sayur->HARGA_SAYUR, 
          'JUMLAH_ITEM' => $qty, 
          'TOTAL_BAYAR' => $sayur->HARGA_SAYUR*$qty, 
        ]);   
        
        return redirect()->route('get.detail.keranjang');

      }else{
        $keranjang = Keranjang::where('ID_USER', $id)->first();
        $idkeranjang = $keranjang->ID_KERANJANG;
        DetailKeranjang::create([
              'ID_SAYUR' => $id_sayur, 
              'ID_KERANJANG' => $idkeranjang, 
              'ID_USER' => $id, 
              'TOTAL_HARGA_ITEM' => $sayur->HARGA_SAYUR, 
              'JUMLAH_ITEM' => $qty, 
              'TOTAL_BAYAR' => $sayur->HARGA_SAYUR*$qty, 
          ]);

        return redirect()->route('get.detail.keranjang');
      } 
    }
      
  }
