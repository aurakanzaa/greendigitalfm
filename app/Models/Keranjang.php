<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model {

    /**
     * Generated
     */

    protected $table = 'keranjang';
    protected $fillable = ['ID_KERANJANG', 'ID_USER', 'STATUS_KERANJANG'];
    public $timestamps = false;

    public function detailKeranjangs() {
        return $this->hasMany(\App\Models\DetailKeranjang::class, 'ID_KERANJANG', 'ID_KERANJANG');
    }

    public function pembelians() {
        return $this->hasMany(\App\Models\Pembelian::class, 'ID_KERANJANG', 'ID_KERANJANG');
    }


}
