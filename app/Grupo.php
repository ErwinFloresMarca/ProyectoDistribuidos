<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Actividad;
use App\Fixture;
class Grupo extends Model
{
    protected $table='grupos';
    public function actividades(){
      return $this->hasMany(Actividad::class);
    }
    public function fixture(){
        return $this->belongsTo(Fixture::class);
    }
}
