<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model {

    /**
     * Generated
     */

    protected $table = 'pembelian';
    protected $fillable = ['ID_PEMBELIAN', 'ID_KERANJANG', 'ID_USER'];
    public $timestamps = false;

    public function keranjang() {
        return $this->belongsTo(\App\Models\Keranjang::class, 'ID_KERANJANG', 'ID_KERANJANG');
    }

    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'ID_USER', 'ID_USER');
    }

    public function detailPembelians() {
        return $this->hasMany(\App\Models\DetailPembelian::class, 'ID_PEMBELIAN', 'ID_PEMBELIAN');
    }


}
