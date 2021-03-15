@extends('layouts.plantilla')

@section('title','PackService')

@section('content')
	<h1>Página para crear Paquete de servicios</h1>
	<form action="{{ route('packservices.store') }}" method="POST">
		
		@csrf
		<label>
			Nombre:&nbsp;&nbsp;
			<input type="text" name="name" value="{{ old('name') }}">
		</label>
		@error('name')
		<br>
		<small>*{{ $message }}</small>
		<br>
		@enderror()
		<br><br>
		<label>
			Internet:&nbsp;&nbsp;
			<select name="internet_id">
				<option value="{{ null }}">Ninguno</option>
				@foreach ($internets as $internet)
					<option value="{{ $internet->id }}">{{ $internet->name }}</option>
			@endforeach
			</select>
		</label>
		<br><br>
		<label>
			Cable:&nbsp;&nbsp;&nbsp;&nbsp;
			<select name="cable_id">
				<option value="{{ null }}">Ninguno</option>
				@foreach ($cables as $cable)
					
					<option value="{{ $cable->id }}">{{ $cable->name }}</option>
			@endforeach
			</select>
		</label>
		<br><br>
		<label>
			Telefono:
			<select name="telephone_id">
				<option value="{{ null }}">Ninguno</option>
				@foreach ($telephones as $telephone)
					<option value="{{ $telephone->id }}">{{ $telephone->name }}</option>
			@endforeach
			</select>
		</label>
		<br><br>
		<button type="submit">Enviar Formulario</button>
	</form>
@endsection