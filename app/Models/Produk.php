<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model {

    /**
     * Generated
     */

    protected $table = 'produk';
    protected $fillable = ['ID_SAYUR', 'ID_COUPON', 'ID_KATEGORI', 'ID_TOKO', 'NAMA_SAYUR', 'HARGA_SAYUR', 'DETAIL_SAYUR', 'STATUS_SAYUR', 'DISKON_SAYUR', 'HARGA_DISKON', 'GAMBAR_SAYUR', 'STOCK_SAYUR'];
    public $timestamps = false;

    public function diskon() {
        return $this->belongsTo(\App\Models\Diskon::class, 'ID_COUPON', 'ID_COUPON');
    }

    public function toko() {
        return $this->belongsTo(\App\Models\Toko::class, 'ID_TOKO', 'ID_TOKO');
    }

    public function kategori() {
        return $this->belongsTo(\App\Models\Kategori::class, 'ID_KATEGORI', 'ID_KATEGORI');
    }

    public function detailKeranjangs() {
        return $this->hasMany(\App\Models\DetailKeranjang::class, 'ID_SAYUR', 'ID_SAYUR');
    }


}
