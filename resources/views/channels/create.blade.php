@extends('layouts.plantilla')

@section('title','Packchannel create')

@section('content')
	<h1>Bienvenido aquí podras crear de canales</h1>
	<form action="{{ route('channels.store') }}" method="POST">

		{{-- directiva de token --}}
		@csrf
		<label>
			Paquete de canal:
			<br>
			<input type="hidden" name="packchannel_id" value="{{ $packchannel }}">
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
		<button type="submit">Enviar Formulario</button>
	</form>
@endsection


