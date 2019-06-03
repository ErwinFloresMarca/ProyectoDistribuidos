<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'administradores';

    public function persona (){
    	return $this->belongsTo(personas::class);
    }
}
