<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransaksiPindahRuangan extends Model
{
    //
    use SoftDeletes;

    public function approval_transaksi_pindah_ruangan(){
        return $this->hasMany('App\ApprovalTransaksiPindahRuangan');
    }

    public function user(){
        return $this->hasMany('App\User');
    }
}
