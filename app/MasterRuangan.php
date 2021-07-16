<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterRuangan extends Model
{
    //
    use SoftDeletes;

    public function master_aset(){
        return $this->hasMany('App\MasterAset');
    }

    public function user(){
        return $this->belongsTo('App\User', 'penanggung_jawab_ruangan_id');
    }

    public function master_lantai(){
        return $this->belongsTo('App\MasterLantai');
    }
}
