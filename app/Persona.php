<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
   protected $table = 'personas';

   public function administrador (){
    	return $this->hasOne(administrador::class);
    }

    public function delegado (){
    	return $this->hasOne(delegado::class);
    }

    public function arbitro(){
    	return $this->hasOne(arbitro::class);
    }

    public function jugador(){
    	return $this->hasOne(jugador::class)
    }

}
