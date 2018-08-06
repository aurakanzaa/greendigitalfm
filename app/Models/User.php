<?php 

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable {

    use Notifiable;

    /**
     * Generated
     */

    protected $table = 'users';
    protected $primaryKey = 'ID_USER';
    protected $fillable = ['username', 'password', 'NAMA_USER', 'email', 'ID_USER', 'ID_TOKO', 'ALAMAT_USER', 'TELP_USER', 'NO_IDENTITAS2', 'BALANCE_MONEY', 'REMEMBER_TOKEN'];
    public $timestamps = false;

    public function toko() {
        return $this->belongsTo(\App\Models\Toko::class, 'ID_TOKO', 'ID_TOKO');
    }

    public function pembelians() {
        return $this->hasMany(\App\Models\Pembelian::class, 'ID_USER', 'ID_USER');
    }

    public function tokos() {
        return $this->hasMany(\App\Models\Toko::class, 'ID_USER', 'ID_USER');
    }


}
