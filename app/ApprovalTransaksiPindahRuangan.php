<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\TransaksiPindahRuangan;
use App\User;

class ApprovalTransaksiPindahRuangan extends Model
{
    //
    use SoftDeletes;

    public function transaksi_pindah_ruangan(){
        return $this->belongsTo('TransaksiPindahRuangan');
    }

    public function user(){
        return $this->belongsTo('User');
    }
}
