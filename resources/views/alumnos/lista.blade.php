@extends('layouts.layoutPrincipal')
@section('contenido')

<ol>
@foreach($alumnos as $alumno)

<li>{{$alumno->nombre}} - {{$alumno->nif}} - {{$alumno->direccion}} - {{$alumno->email}} - {{$alumno->telefono}}</li>

@endforeach
</ol>



@endsection