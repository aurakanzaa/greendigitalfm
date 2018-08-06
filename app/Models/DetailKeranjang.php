<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailKeranjang extends Model {

    /**
     * Generated
     */

    protected $table = 'detail_keranjang';
    protected $fillable = ['ID_DETAIL_KERANJANG', 'ID_SAYUR', 'ID_KERANJANG', 'ID_USER', 'TOTAL_HARGA_ITEM', 'JUMLAH_ITEM', 'TOTAL_BAYAR', 'TGL_BELI'];
    public $timestamps = false;

    public function produk() {
        return $this->belongsTo(\App\Models\Produk::class, 'ID_SAYUR', 'ID_SAYUR');
    }

    public function keranjang() {
        return $this->belongsTo(\App\Models\Keranjang::class, 'ID_KERANJANG', 'ID_KERANJANG');
    }

    public function tokos() {
        return $this->belongsToMany(\App\Models\Toko::class, 'history_trans_seller', 'ID_DETAIL_KERANJANG', 'ID_TOKO');
    }

    public function historyTransSellers() {
        return $this->hasMany(\App\Models\HistoryTransSeller::class, 'ID_DETAIL_KERANJANG', 'ID_DETAIL_KERANJANG');
    }

    public function keranjangs() {
        return $this->hasMany(\App\Models\Keranjang::class, 'ID_DETAIL_KERANJANG', 'ID_DETAIL_KERANJANG');
    }


}
