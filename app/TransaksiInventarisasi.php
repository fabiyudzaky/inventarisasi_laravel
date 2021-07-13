<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\ApprovalTransaksiInventarisasi;
use App\User;

class TransaksiInventarisasi extends Model
{
    //
    use SoftDeletes;

    public function approval_transaksi_inventarisasi(){
        return $this->hasMany('ApprovalTransaksiInventarisasi');
    }

    public function user(){
        return $this->hasMany('User');
    }
}
