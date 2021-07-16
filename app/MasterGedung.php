<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterGedung extends Model
{
    //
    use SoftDeletes;

    public function master_lantai(){
        return $this->hasMany('App\MasterLantai');
    }

    public function master_aset(){
        return $this->belongsTo('App\MasterAset');
    }
}
