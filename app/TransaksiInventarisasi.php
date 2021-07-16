<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransaksiInventarisasi extends Model
{
    //
    use SoftDeletes;

    public function approval_transaksi_inventarisasi(){
        return $this->hasMany('App\ApprovalTransaksiInventarisasi');
    }

    public function user(){
        return $this->hasMany('App\User');
    }

    public function master_kondisi(){
        return $this->belongsTo('App\MasterKondisi', 'kondisi_id');
    }
}
