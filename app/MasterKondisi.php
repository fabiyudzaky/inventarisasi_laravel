<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\MasterAset;
use App\TransaksiInventarisasi;

class MasterKondisi extends Model
{
    //
    use SoftDeletes;

    public function master_aset(){
        return $this->hasMany('MasterAset');
    }

    public function transaksi_inventarisasi(){
        return $this->hasMany('TransaksiInventarisasi');
    }
}
