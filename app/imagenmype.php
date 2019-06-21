<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imagenmype extends Model
{
    //
    public function mype(){
        return $this->belongsTo(mype::class);
    }
}
