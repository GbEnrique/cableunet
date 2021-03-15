@extends('layouts.plantilla')

@section('title','Telephones' . $telephone->name)

@section('content')
	<h1>Bienvenido al telephone {{$telephone->name}} </h1>
	<a href="{{ route('telephones.index') }}">Volver a planes</a>
	<br>
	<a href="{{ route('telephones.edit', $telephone) }}">Editar</a>
	<p>
		<strong>Precio: </strong>{{ $telephone->price.'$' }}
	</p>
	<p>
		<strong>minutos: </strong>{{ $telephone->minutes }}
	</p>
	<form action="{{ route('telephones.destroy', $telephone) }}" method="POST">
		@csrf
		@method('delete')
		<button type="submit">Eliminar</button>
	</form>
@endsection