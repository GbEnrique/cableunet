@extends('layouts.plantilla')

@section('title','Telephones create')

@section('content')
	<h1>Bienvenido aquí podras crear planes para telefonos</h1>
	<form action="{{ route('telephones.store') }}" method="POST">

		{{-- directiva de token --}}
		@csrf

		<label>
			Nombre:
			<br>
			<input type="text" name="name" value="{{ old('name') }}">
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
			<input type="text" name="price" value="{{ old('price') }}">
		</label>
		@error('price')
		<br>
		<small>*{{ $message }}</small>
		<br>
		@enderror()
		<br>
		<label>
			cant. Minutos:
			<br>
			<input type="text" name="minutes" value="{{ old('minutes') }}">
		</label>
		@error('minutes')
		<br>
		<small>*{{ $message }}</small>
		<br>
		@enderror()
		<br>
		<button type="submit">Enviar Formulario</button>
	</form>
@endsection

