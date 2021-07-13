<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\MasterAset;
use App\MasterLantai;

class MasterGedung extends Model
{
    //
    use SoftDeletes;

    public function master_lantai(){
        return $this->hasMany('MasterLantai');
    }

    public function master_aset(){
        return $this->belongsTo('MasterAset');
    }
}
