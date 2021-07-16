<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterAset extends Model
{
    //
    use SoftDeletes;

    public function transaksi_inventarisasi(){
        return $this->hasMany('App\TransaksiInventarisasi');
    }

    public function transaksi_pindah_ruangan(){
        return $this->hasMany('App\TransaksiPindahRuangan');
    }

    public function master_gedung(){
        return $this->hasMany('App\MasterGedung');
    }

    public function master_kodisi(){
        return $this->belongsTo('App\MasterKondisi');
    }

    public function master_jenis_inventarisasi(){
        return $this->belongsTo('App\MasterJenisInventarisasi');
    }
}
