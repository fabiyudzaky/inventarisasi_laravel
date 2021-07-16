<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterJenisInventarisasi extends Model
{
    //
    use SoftDeletes;

    public function transaksi_inventarisasi(){
        return $this->hasMany('App\TransaksiInventarisasi');
    }

    public function transaksi_pindah_ruangan(){
        return $this->hasMany('App\TransaksiPindahRuangan');
    }
}
