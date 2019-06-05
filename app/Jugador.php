<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Equipo;
class Jugador extends Model
{
    protected $table='jugadores';
    public function equipo(){
      return $this->belongsTo(Equipo::class);
    }
}
