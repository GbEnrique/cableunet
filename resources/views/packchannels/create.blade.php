@extends('layouts.plantilla')

@section('title','Packchannel create')

@section('content')
	<h1>Bienvenido aquí podras crear paquetes de canales</h1>
	<form action="{{ route('packchannels.store') }}" method="POST">

		{{-- directiva de token --}}
		@csrf
		<label>
			Cable:
			<br>
			<input type="hidden" name="cable_id" value="{{ $cable }}">
		</label>
		<br>
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
			<input type="text" name="price" value="{{ old('name') }}">
		</label>
		@error('price')
		<br>
		<small>*{{ $message }}</small>
		<br>
		@enderror()
		<br>
		<button type="submit">Enviar Formulario</button>
	</form>
@endsection


