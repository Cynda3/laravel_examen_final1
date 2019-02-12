@extends('layouts.layoutPrincipal')
@section('contenido')

<form action="{{ route('lista') }}" method="get">
	@csrf
	<h1>Elija el ciclo del cual quiere listar los alumnos:</h1>
	<select name="ciclo">
		@foreach($ciclos as $ciclo)
		<option value="{{$ciclo->id}}">{{$ciclo->cod}}</option>
		@endforeach
	</select>
	<button type="submit">Mostrar lista</button>
</form>
@endsection