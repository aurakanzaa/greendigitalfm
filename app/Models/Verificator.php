<?php 

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Verificator extends Authenticatable {

    use Notifiable;

    protected $guard = 'admin';

    /**
     * Generated
     */

    protected $table = 'verificator';
    protected $primaryKey = 'NIP_VERIFICATOR';
    protected $fillable = ['NIP_VERIFICATOR', 'name', 'password', 'email', 'REMEMBER_TOKEN'];
    public $timestamps = false;

    public function detailPembelians() {
        return $this->hasMany(\App\Models\DetailPembelian::class, 'NIP_VERIFICATOR', 'NIP_VERIFICATOR');
    }


}
