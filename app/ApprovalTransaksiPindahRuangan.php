<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApprovalTransaksiPindahRuangan extends Model
{
    //
    use SoftDeletes;

    public function transaksi_pindah_ruangan(){
        return $this->belongsTo('App\TransaksiPindahRuangan');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
