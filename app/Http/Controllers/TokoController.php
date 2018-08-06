<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Keranjang;
use App\Models\DetailKeranjang;
use Auth;

class TokoController extends Controller
{
    public function index(){
        $id = Auth::user()->ID_USER;
        $toko = Toko::where('ID_USER', $id)->first();
        $kategori = Kategori::get();
        $keranjang = Keranjang::where('ID_USER', $id)->where('STATUS_KERANJANG', 0)->get();

        return view('toko')->with('toko', $toko)->with('kategori', $kategori);
    }

    public function registerToko(Request $request){
        $id = Auth::user()->ID_USER;
        $nama = $request->input('namatoko');
        $address = $request->input('shopaddress');
        $province = $request->input('province');
        $city = $request->input('city');
        $postalcode = $request->input('postalcode');
        $norek = $request->input('norek');

        Toko::create([
            'ID_USER' => $id,
            'NAMA_TOKO' => $nama,
            'ALAMAT_TOKO' => $address,
            'PROVINSI_TOKO' => $province,
            'KOTA_TOKO' => $city,
            'KODEPOS_TOKO' => $postalcode,
            'NO_REK_TOKO' => $norek,
        ]);

        return redirect()->route('toko.dashboard');
    }

    public function updateToko(Request $request){
        $id = Auth::user()->ID_USER;
        $nama = $request->input('namatoko');
        $address = $request->input('shopaddress');
        $province = $request->input('province');
        $city = $request->input('city');
        $postalcode = $request->input('postalcode');
        $norek = $request->input('norek');

        Toko::where('ID_USER', $id)->update(array(
            'NAMA_TOKO' => $nama,
            'ALAMAT_TOKO' => $address,
            'PROVINSI_TOKO' => $province,
            'KOTA_TOKO' => $city,
            'KODEPOS_TOKO' => $postalcode,
            'NO_REK_TOKO' => $norek,
        ));

        return redirect()->route('toko.dashboard');
    }

    public function createProduct(Request $request){

        $this->validate($request, [
        'file' => 'required|file|max:2000',
        ]);
        
        $id = Auth::user()->ID_USER;
        $toko = Toko::where('ID_USER', $id)->first();
        $id_toko = $toko->ID_TOKO;
        $kategori = $request->input('kategorisayur');
        $nama = $request->input('namasayur');
        $harga = $request->input('hargasayur');
        $detail = $request->input('detailsayur');
        $uploadedFile = $request->file('file');
        $stock = $request->input('stocksayur');
        $path = $uploadedFile->storeAs('public/images', $uploadedFile->getClientOriginalName());
        $images= 'images/';

        $file = Produk::create([
            'ID_COUPON' => 1,
            'ID_TOKO' => $id_toko,
            'ID_KATEGORI' => $kategori,
            'NAMA_SAYUR' => $nama,
            'HARGA_SAYUR' => $harga,
            'DETAIL_SAYUR' => $detail,
            'STATUS_SAYUR' => 1,
            'GAMBAR_SAYUR' => $images + $uploadedFile->getClientOriginalName(),
            'STOCK_SAYUR' => $stock,
        ]);

        return redirect()->route('toko.dashboard');
    }
}
