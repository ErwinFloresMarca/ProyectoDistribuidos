<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Arbitro;
use App\Equipo;
use App\Actividad;

class Partido extends Model
{
    //
    protected $table='partidos';
    public function arbitro(){
      return $this->belongsTo(Arbitro::class);
    }
    public function equipos(){
      return $this->belongsToMany(Equipo::class);
    }
    public function actividad(){
      return $this->belongsTo(Actividad::class);
    }
}
