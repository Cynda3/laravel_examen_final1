<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciclo;
use App\Alumno;
use App\Empresa;

class AlumnoController extends Controller
{
   	public function listar(Request $request){

      $alumnos = Alumno::all();

      $cicloId = $request-> input('ciclo');


      if ($cicloId == 1) {
      	$alumnos = Alumno::where('ciclo_id', 1)->get();
      }elseif ($cicloId == 2) {
      	$alumnos = Alumno::where('ciclo_id', 2)->get();
      }elseif ($cicloId == 3){
      	$alumnos = Alumno::where('ciclo_id', 3)->get();
      }elseif ($cicloId == 4) {
      	$alumnos = Alumno::where('ciclo_id', 4)->get();
      }

      return view('/alumnos/lista')->with([
      	'cicloId' => $cicloId,
      	'alumnos' => $alumnos

   	]);
  }

   	public function index(){
   		
   		$ciclos = Ciclo::all();


   		return view('/alumnos/alumnosLista')->with([
		'ciclos' => $ciclos
		]);
   	}
}
