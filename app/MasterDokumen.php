<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\TransaksiInventarisasi;
use App\TransaksiPindahRuangan;

class MasterDokumen extends Model
{
    //
    use SoftDeletes;

    public function transaksi_inventarisasi(){
        return $this->hasMany('TransaksiInventarisasi');
    }

    public function transaksi_pindah_ruangan(){
        return $this->hasMany('TransaksiPindahRuangan');
    }
}
