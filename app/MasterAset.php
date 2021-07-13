<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\TransaksiInventarisasi;
use App\TransaksiPindahRuangan;
use App\MasterGedung;
use App\Kondisi;
use App\MasterJenisInventarisasi;

class MasterAset extends Model
{
    //
    use SoftDeletes;

    public function transaksi_inventarisasi(){
        return $this->hasMany('TransaksiInventarisasi');
    }

    public function transaksi_pindah_ruangan(){
        return $this->hasMany('TransaksiPindahRuangan');
    }

    public function master_gedung(){
        return $this->hasMany('MasterGedung');
    }

    public function master_kodisi(){
        return $this->belongsTo('MasterKondisi');
    }

    public function master_jenis_inventarisasi(){
        return $this->belongsTo('MasterJenisInventarisasi');
    }
}
