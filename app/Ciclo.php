<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{ 

	public function alumno(){
    	return $this->hasMany('App\Alumno');
    }
}
