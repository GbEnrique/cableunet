@extends('layouts.plantilla')

@section('title','Telefonos edit')

@section('content')
	<h1>Bienvenido aquí podras editar cursos</h1>
	<form action="{{ route('telephones.update', $telephone) }}" method="POST">

		{{-- directiva de token --}}
		@csrf
		{{-- DEFINIENDO EL METODO DE ENVIO --}}
		@method('PUT')
		<label>
			Nombre:
			<br>
			<input type="text" name="name" value="{{ old('name',$telephone->name) }}">
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
			<input type="text" name="price" value="{{ old('price',$telephone->price) }}">
		</label>
		@error('price')
		<br>
		<small>*{{ $message }}</small>
		<br>
		@enderror()
		<br>
		<label>
			Minutos:
			<br>
			<input type="text" name="minutes" value="{{ old('minutes',$telephone->minutes) }}">
		</label>
		@error('minutes')
		<br>
		<small>*{{ $message }}</small>
		<br>
		@enderror()
		<br>
		<button type="submit">Actualizar Formulario</button>
	</form>
@endsection

