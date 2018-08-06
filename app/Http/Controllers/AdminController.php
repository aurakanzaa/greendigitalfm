<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\DetailPembelian;
use App\Models\Keranjang;
use App\Models\DetailKeranjang;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapembelian = DetailPembelian::get();

        return view('admin')->with('datapembelian', $datapembelian);
    }

    public function verify(Request $request){
        DetailPembelian::where('ID_PEMBELIAN', $request->id_pembelian)->update(array('STATUS_KIRIM' => 1));
        
        return redirect()->back();
    }
}
