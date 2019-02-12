<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{ 

	public function ciclo(){
    	return $this->belongTo('App\Ciclo');
    }
}
