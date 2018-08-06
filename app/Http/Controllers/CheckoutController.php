<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\DetailKeranjang;
use App\Models\Pembelian;
use App\Models\DetailPembelian;
use Auth;

class CheckoutController extends Controller
{

    public function index()
    {
        $id = Auth::user()->ID_USER; 
        $keranjang = Keranjang::where('ID_USER', $id)->first();
        $idkeranjang = $keranjang->ID_KERANJANG;
        $datakeranjang = DetailKeranjang::where('ID_KERANJANG', $idkeranjang)->get();
        $totalharga = DetailKeranjang::where('ID_USER', $id)->where('ID_KERANJANG', $idkeranjang)->sum('TOTAL_BAYAR');

        return view('checkout')->with('datakeranjang', $datakeranjang)->with('totalharga', $totalharga);
    }

    public function createTransaction(Request $request){
        $id = Auth::user()->ID_USER;
        $alamat = $request->input('alamat_kirim');
        $keranjang = Keranjang::where('ID_USER', $id)->where('STATUS_KERANJANG', 0)->first();
        $idkeranjang = $keranjang->ID_KERANJANG;
        Pembelian::create([
            'ID_KERANJANG' => $idkeranjang,
            'ID_USER' => $id,
        ]);

        $pembelian = Pembelian::where('ID_USER', $id)->where('ID_KERANJANG', $idkeranjang)->first();
        $idpembelian = $pembelian->ID_PEMBELIAN;
        DetailPembelian::create([
            'ID_PEMBELIAN' => $idpembelian,
            'ALAMAT_KIRIM' => $alamat,
        ]);

        return redirect()->route('get.transaction');

    }

}
