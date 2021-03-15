@extends('layouts.plantilla')

@section('title','Internet create')

@section('content')
	<h1>Bienvenido aquí podras crear planes para internet</h1>
	<form action="{{ route('internets.store') }}" method="POST">

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
			Velocidad:
			<br>
			<input type="text" name="speed" value="{{ old('speed') }}">
		</label>
		@error('speed')
		<br>
		<small>*{{ $message }}</small>
		<br>
		@enderror()
		<br>
		<button type="submit">Enviar Formulario</button>
	</form>
@endsection

