<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    protected $table = 'fixtures';

    public function grupos(){
    	return $this -> hasMany(grupo::class);

    }
    public function administrador (){
    	return $this -> belongsTo(administrador::class);
    }
}
