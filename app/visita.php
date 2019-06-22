<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visita extends Model
{
    //
    public function users(){

        return $this->belongsToMany('User');
    }


    public function mypes(){

        return $this->belongsToMany('Mypes');
    }
}
