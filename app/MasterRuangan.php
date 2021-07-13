<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\MasterAset;
use App\MasterLantai;
use App\User;

class MasterRuangan extends Model
{
    //
    use SoftDeletes;

    public function master_aset(){
        return $this->hasMany('MasterAset');
    }

    public function user(){
        return $this->belongsTo('User');
    }

    public function master_lantai(){
        return $this->belongsTo('MasterLantai');
    }
}
