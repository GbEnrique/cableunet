@extends('layouts.plantilla')

@section('title','Usuarios edit')

@section('content')
	<h1>Bienvenido aquí podras editar cursos</h1>
	<form action="{{ route('users.update', $user) }}" method="POST">

		{{-- directiva de token --}}
		@csrf
		{{-- DEFINIENDO EL METODO DE ENVIO --}}
		@method('PUT')
		<label>
			Nombre:
			<br>
			<input type="text" name="name" value="{{ old('name',$user->name) }}">
		</label>
		@error('name')
		<br>
		<small>*{{ $message }}</small>
		<br>
		@enderror()

		<br>
		<label>
			email:
			<br>
			<input type="email" name="email" value="{{ old('email',$user->email) }}">
		</label>
		@error('email')
		<br>
		<small>*{{ $message }}</small>
		<br>
		@enderror()
		<br>
		<label>
			status:
			<br>
			<select name="status">
				 <option>user</option>

		      <option>admin</option>
			</select>
		</label>
		@error('status')
		<br>
		<small>*{{ $message }}</small>
		<br>
		@enderror()
		<br>
		<button type="submit">Actualizar Formulario</button>
	</form>
@endsection

