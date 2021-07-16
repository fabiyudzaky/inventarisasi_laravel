<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApprovalTransaksiInventarisasi extends Model
{
    //
    use SoftDeletes;

    public function transaksi_inventarisasi(){
        return $this->belongsTo('App\TransaksiInventarisasi');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
