@extends('layouts.plantilla')

@section('title','Chanales' . $channel->name)

@section('content')
	<h1>Bienvenido al canal {{$channel->name}} </h1>
	
	<a href="{{ route('programations.crear',$channel) }}">Añadir Programacion</a>

	<a href="{{ route('programations.ver',$channel) }}">Ver Programacion</a>
	<br>
	<a href="{{ route('channels.index') }}">Volver a planes</a>
	<br>
	{{-- <a href="{{ route('cables.edit', $cable) }}">Editar</a> --}}
	{{-- <a href="{{ route('packchannels.create') }}">Crear programcion</a> --}}
	<p>
		{{-- <strong>Precio: </strong>{{ $channel->price.'$' }} --}}
	</p>
	{{-- <form action="{{ route('cables.destroy', $cable) }}" method="POST">
		@csrf
		@method('delete')
		<button type="submit">Eliminar</button>
	</form> --}}
@endsection