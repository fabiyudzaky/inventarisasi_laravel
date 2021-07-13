<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\TransaksiInventarisasi;
use App\User;

class ApprovalTransaksiInventarisasi extends Model
{
    //
    use SoftDeletes;

    public function transaksi_inventarisasi(){
        return $this->belongsTo('TransaksiInventarisasi');
    }

    public function user(){
        return $this->belongsTo('User');
    }
}
