<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model {

    /**
     * Generated
     */

    protected $table = 'toko';
    protected $fillable = ['ID_TOKO', 'ID_USER', 'NAMA_TOKO', 'ALAMAT_TOKO', 'PROVINSI_TOKO', 'KOTA_TOKO', 'KODEPOS_TOKO', 'RATING_TOKO', 'NO_REK_TOKO'];
    public $timestamps = false;


    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'ID_USER', 'ID_USER');
    }

    public function detailKeranjangs() {
        return $this->belongsToMany(\App\Models\DetailKeranjang::class, 'history_trans_seller', 'ID_TOKO', 'ID_DETAIL_KERANJANG');
    }

    public function historyTransSellers() {
        return $this->hasMany(\App\Models\HistoryTransSeller::class, 'ID_TOKO', 'ID_TOKO');
    }

    public function produks() {
        return $this->hasMany(\App\Models\Produk::class, 'ID_TOKO', 'ID_TOKO');
    }

    public function users() {
        return $this->hasMany(\App\Models\User::class, 'ID_TOKO', 'ID_TOKO');
    }


}
