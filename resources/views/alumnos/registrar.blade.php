@extends('layouts.layoutPrincipal')
@section('contenido')

<form action="{{ route('lista') }}" method="post">
	@csrf
	<label>Nombre</label>
	<input type="text" name="nombre">
	<label>genero</label>
  <input type="radio" id="masculino" name="drone" value="masculino">
  <label for="masculino">masculino</label>

  <input type="radio" id="femenino" name="drone" value="femenino">
  <label for="femenino">femenino</label>
  <input type="radio" id="otros" name="drone" value="otros">
  <label for="otros">otros</label>

	<button type="submit">Mostrar lista</button>
</form>
@endsection