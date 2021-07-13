<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\MasterGedung;
use App\MasterRuangan;

class MasterLantai extends Model
{
    //
    use SoftDeletes;

    public function master_ruangan(){
        return $this->hasMany('MasterRuangan');
    }

    public function master_aset(){
        return $this->belongsTo('MasterGedung');
    }
}
