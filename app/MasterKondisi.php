<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterKondisi extends Model
{
    //
    use SoftDeletes;

    public function master_aset(){
        return $this->hasMany('App\MasterAset');
    }

    public function transaksi_inventarisasi(){
        return $this->hasMany('App\TransaksiInventarisasi');
    }
}
