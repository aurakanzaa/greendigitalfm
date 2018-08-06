<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model {

    /**
     * Generated
     */

    protected $table = 'kategori';
    protected $fillable = ['ID_KATEGORI', 'NAMA_KATEGORI'];


    public function produks() {
        return $this->hasMany(\App\Models\Produk::class, 'ID_KATEGORI', 'ID_KATEGORI');
    }


}
