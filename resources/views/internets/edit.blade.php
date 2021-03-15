@extends('layouts.plantilla')

@section('title','Telefonos edit')

@section('content')
	<h1>Bienvenido aquí podras editar los planes de internet</h1>
	<form action="{{ route('internets.update', $internet) }}" method="POST">

		{{-- directiva de token --}}
		@csrf
		{{-- DEFINIENDO EL METODO DE ENVIO --}}
		@method('PUT')
		<label>
			Nombre:
			<br>
			<input type="text" name="name" value="{{ old('name',$internet->name) }}">
		</label>
		@error('name')
		<br>
		<small>*{{ $message }}</small>
		<br>
		@enderror()

		<br>
		<label>
			Precio:
			<br>
			<input type="text" name="price" value="{{ old('price',$internet->price) }}">
		</label>
		@error('price')
		<br>
		<small>*{{ $message }}</small>
		<br>
		@enderror()
		<br>
		<label>
			Velocidad:
			<br>
			<input type="text" name="speed" value="{{ old('minutes',$internet->speed) }}">
		</label>
		@error('speed')
		<br>
		<small>*{{ $message }}</small>
		<br>
		@enderror()
		<br>
		<button type="submit">Actualizar Formulario</button>
	</form>
@endsection

