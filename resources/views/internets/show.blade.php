@extends('layouts.plantilla')

@section('title','Telephones' . $internet->name)

@section('content')
	<h1>Bienvenido al internet {{$internet->name}} </h1>
	<a href="{{ route('internets.index') }}">Volver a planes</a>
	<br>
	<a href="{{ route('internets.edit', $internet) }}">Editar</a>
	<p>
		<strong>Precio: </strong>{{ $internet->price.'$' }}
	</p>
	<p>
		<strong>Velocidad: </strong>{{ $internet->speed }}
	</p>
	<form action="{{ route('internets.destroy', $internet) }}" method="POST">
		@csrf
		@method('delete')
		<button type="submit">Eliminar</button>
	</form>
@endsection