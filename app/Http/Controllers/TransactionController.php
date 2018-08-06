<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\DetailKeranjang;
use App\Models\Pembelian;
use App\Models\DetailPembelian;
use Auth;

class TransactionController extends Controller
{

    public function index()
    {
        $id = Auth::user()->ID_USER;
        $keranjang = Keranjang::where('ID_USER', $id)->where('STATUS_KERANJANG', 0)->first();
        $idkeranjang = $keranjang->ID_KERANJANG;
        $pembelian = Pembelian::where('ID_USER', $id)->where('ID_KERANJANG', $idkeranjang)->first();
        $idpembelian = $pembelian->ID_PEMBELIAN;
        $datadetailpembelian = DetailPembelian::where('ID_PEMBELIAN', $idpembelian)->get();
        $status = DetailPembelian::where('ID_PEMBELIAN', $idpembelian)->first()->STATUS_KIRIM;
        $datakeranjang = DetailKeranjang::where('ID_KERANJANG', $idkeranjang)->get();
        $totalharga = DetailKeranjang::where('ID_USER', $id)->where('ID_KERANJANG', $idkeranjang)->sum('TOTAL_BAYAR');

        return view('transaction')->with('totalharga', $totalharga)->with('datadetailpembelian', $datadetailpembelian)->with('datakeranjang', $datakeranjang)->with('datapembelian', $pembelian)->with('status', $status);
    }
}
