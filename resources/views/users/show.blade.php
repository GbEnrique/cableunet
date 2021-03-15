@extends('layouts.plantilla')

@section('title','Usuarios' . $user->name)

@section('content')
	<h1>El usuario {{$user->name}} </h1>
	<a href="{{ route('users.index') }}">Volver a vista usuarios</a>
	<br>
	<a href="{{ route('users.edit', $user) }}">Editar</a>
	<p>
		<strong>email: </strong>{{ $user->email }}
	</p>
	<p>
		<strong>status: </strong>{{ $user->status }}
	</p>
	<form action="{{ route('users.destroy', $user) }}" method="POST">
		@csrf
		@method('delete')
		<button type="submit">Eliminar</button>
	</form>
@endsection