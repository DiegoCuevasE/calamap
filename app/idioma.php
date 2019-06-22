<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idioma extends Model
{
    //
    public function mypes(){
        return $this->belongsToMany(Mype::class,'manejos','mype_id','idioma_id');
    }
}
