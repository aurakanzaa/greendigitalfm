<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diskon extends Model {

    /**
     * Generated
     */

    protected $table = 'diskon';
    protected $fillable = ['ID_COUPON', 'TGL_TERBIT', 'TGL_VALID', 'TYPE_COUPON', 'NOMINAL_COUPON'];


    public function produks() {
        return $this->hasMany(\App\Models\Produk::class, 'ID_COUPON', 'ID_COUPON');
    }


}
