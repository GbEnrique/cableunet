@extends('layouts.plantilla')

@section('title','Packchannel create')

@section('content')
	<h1>Bienvenido aquí podras crear programas</h1>
	<form action="{{ route('programations.store') }}" method="POST">

		{{-- directiva de token --}}
		@csrf
		<label>
			Canal:
			<br>
			<input type="hidden" name="channel_id" value="{{ $channel }}">
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
			Día:
			<br>
			<select name="day">

		      <option>Lunes</option>

		      <option>Martes</option>

		      <option>Miercoles</option>

		      <option>Jueves</option>

		      <option>Viernes</option>

		      <option>Sabado</option>

		      <option>Domingo</option>

    	</select>
		</label>
		@error('day')
		<br>
		<small>*{{ $message }}</small>
		<br>
		@enderror()
		<br>
		<label>
			Hora de inicio:
			<br>
			<input type="time" name="start_hour" value="{{ old('start_hour') }}">
		</label>
		@error('start_hour')
		<br>
		<small>*{{ $message }}</small>
		<br>
		@enderror()
		<br>
		<label>
			Hora de fin:
			<br>
			<input type="time" name="end_hour" value="{{ old('end_hour') }}">
		</label>
		@error('end_hour')
		<br>
		<small>*{{ $message }}</small>
		<br>
		@enderror()
		<br>
		<button type="submit">Enviar Formulario</button>
	</form>
@endsection



