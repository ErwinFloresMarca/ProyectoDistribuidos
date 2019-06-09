<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Grupo;
use App\Partido;

class Actividad extends Model
{
    //
    protected $table='actividades';
    public function grupo(){
      return $this->belongsTo(Grupo::class);
    }
    public function partidos(){
      return $this->hasMany(Partido::class);
    }
    public function CrearActividades($grupo_id,$equipos){
      
    }
}
