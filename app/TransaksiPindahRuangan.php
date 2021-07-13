<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\ApprovalTransaksiPindahRuangan;
use App\User;

class TransaksiPindahRuangan extends Model
{
    //
    use SoftDeletes;

    public function approval_transaksi_pindah_ruangan(){
        return $this->hasMany('ApprovalTransaksiPindahRuangan');
    }

    public function user(){
        return $this->hasMany('User');
    }
}
