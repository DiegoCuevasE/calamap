<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    //
    public function mypes()
    {
        return $this->belongsToMany(Mype::class,'otorgas', 'mype_id',  'servicio_id');
    }
    

}
