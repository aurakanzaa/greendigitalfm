<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\DetailKeranjang;
use App\Models\Pembelian;
use App\Models\DetailPembelian;
use Auth;
use Storage;

class PaymentController extends Controller
{

    public function index()
    {
        return view('payment');
    }

    public function uploadFile(Request $request)
    {
        $this->validate($request, [
        'file' => 'required|file|max:2000',
        ]);
        
        $nogosend = $request->input('nogojek');
        $uploadedFile = $request->file('file');
        $path = $uploadedFile->storeAs('public/images', $uploadedFile->getClientOriginalName());

        $id = Auth::user()->ID_USER;
        $keranjang = Keranjang::where('ID_USER', $id)->where('STATUS_KERANJANG', 0)->first();
        $idkeranjang = $keranjang->ID_KERANJANG;
        $pembelian = Pembelian::where('ID_USER', $id)->where('ID_KERANJANG', $idkeranjang)->first();
        $idpembelian = $pembelian->ID_PEMBELIAN;

        $file = DetailPembelian::where('ID_PEMBELIAN', $idpembelian)->update([
            'FILE_INVOICE' => $uploadedFile->getClientOriginalName(),
            ]);

    return redirect()
        ->route('get.transaction');  
    }
}
