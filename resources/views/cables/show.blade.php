@extends('layouts.plantilla')

@section('title','Cables' . $cable->name)

@section('content')
	<h1>Bienvenido al cable {{$cable->name}} </h1>
	<a href="{{ route('cables.index') }}">Volver a planes</a>
	<br>
	<a href="{{ route('cables.edit', $cable) }}">Editar</a>

	<a href="{{ route('packchannels.crear',$cable) }}">Crear Paquete de Canales</a>
	<br>
	<a href="{{ route('packchannels.ver',$cable) }}">Ver Paquete de Canales</a>
	<p>
		<strong>Precio: </strong>{{ $cable->price.'$' }}
	</p>
	<form action="{{ route('cables.destroy', $cable) }}" method="POST">
		@csrf
		@method('delete')
		<button type="submit">Eliminar</button>
	</form>
@endsection