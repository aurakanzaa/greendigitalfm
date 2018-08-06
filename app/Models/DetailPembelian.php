<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPembelian extends Model {

    /**
     * Generated
     */

    protected $table = 'detail_pembelian';
    protected $fillable = ['ID_DETAIL_PEMBELIAN', 'NIP_VERIFICATOR', 'ID_PEMBELIAN', 'ALAMAT_KIRIM', 'TGL_KIRIM', 'STATUS_KIRIM', 'NAMA_DRIVER', 'NOPOL_DRIVER', 'NO_GOSEND', 'FILE_INVOICE', 'BUKTI_TF'];
    public $timestamps = false;

    public function pembelian() {
        return $this->belongsTo(\App\Models\Pembelian::class, 'ID_PEMBELIAN', 'ID_PEMBELIAN');
    }

    public function verificator() {
        return $this->belongsTo(\App\Models\Verificator::class, 'NIP_VERIFICATOR', 'NIP_VERIFICATOR');
    }

    public function pembelians() {
        return $this->hasMany(\App\Models\Pembelian::class, 'ID_DETAIL_PEMBELIAN', 'ID_DETAIL_PEMBELIAN');
    }


}
