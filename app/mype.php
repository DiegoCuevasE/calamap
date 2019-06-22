<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mype extends Model
{

    //protected $primaryKey='cod_mype';
    public function servicios(){
        return $this->belongsToMany(Servicio::class, 'otorgas', 'mype_id',  'servicio_id'); //Con asignacion de las claves foraneas rellacionadas
        //return $this->belongsToMany(Servicio::class);

    }
    public function imagenMypes(){
        return $this->hasMany(imagenMype::class);
    }   
}
