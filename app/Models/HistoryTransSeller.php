<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoryTransSeller extends Model {

    /**
     * Generated
     */

    protected $table = 'history_trans_seller';
    protected $fillable = ['NO_HISTORY', 'ID_TOKO', 'ID_DETAIL_KERANJANG'];


    public function toko() {
        return $this->belongsTo(\App\Models\Toko::class, 'ID_TOKO', 'ID_TOKO');
    }

    public function detailKeranjang() {
        return $this->belongsTo(\App\Models\DetailKeranjang::class, 'ID_DETAIL_KERANJANG', 'ID_DETAIL_KERANJANG');
    }


}
