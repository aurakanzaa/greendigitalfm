<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\DetailKeranjang;
use Auth;

class CartController extends Controller
{

    public function index()
    {
        $id = Auth::user()->ID_USER; 
        $keranjang = Keranjang::where('ID_USER', $id)->first();
        $idkeranjang = $keranjang->ID_KERANJANG;
        $datakeranjang = DetailKeranjang::where('ID_KERANJANG', $idkeranjang)->get();
        $totalharga = DetailKeranjang::where('ID_USER', $id)->where('ID_KERANJANG', $idkeranjang)->sum('TOTAL_BAYAR');

        return view('shopcart')->with('datakeranjang', $datakeranjang)->with('totalharga', $totalharga);
    }

    public function deleteItem($id_sayur){
        $id = Auth::user()->ID_USER; 
        DetailKeranjang::where('ID_USER', $id)->where('ID_SAYUR', $id_sayur)->delete();

        return redirect()->route('get.detail.keranjang');
    }

    public function updateQty(Request $request){
        $id = Auth::user()->ID_USER;
        $qty = $request->input('item_qty');
        $id_sayur = $request->input('id_sayur');
        DetailKeranjang::where('ID_USER', $id)->where('ID_SAYUR', $id_sayur)->update(array('JUMLAH_ITEM' => $qty));

        return redirect()->route('get.detail.keranjang');
    }
}
