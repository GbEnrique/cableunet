@extends('layouts.plantilla')

@section('title','Cables' . $packchannel->name)

@section('content')
	<h1>Bienvenido al packchannel {{$packchannel->name}} </h1>
	<a href="{{ route('packchannels.index') }}">Volver a planes</a>
	<br>
	<a href="{{ route('channels.crear',$packchannel) }}">Crear Canales</a>
	
	<a href="{{ route('channels.ver',$packchannel) }}">Ver Paquete de Canales</a>
	<br>
	{{-- <a href="{{ route('cables.edit', $cable) }}">Editar</a> --}}
	{{-- <a href="{{ route('packchannels.create') }}">Crear programcion</a> --}}
	<p>
		<strong>Precio: </strong>{{ $packchannel->price.'$' }}
	</p>
	{{-- <form action="{{ route('cables.destroy', $cable) }}" method="POST">
		@csrf
		@method('delete')
		<button type="submit">Eliminar</button>
	</form> --}}
@endsection