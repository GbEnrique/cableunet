@extends('layouts.plantilla')

@section('title','Cables' . $programation->name)

@section('content')
	<h1>Bienvenido al programa {{$programation->name}} </h1>
	<a href="{{ route('programations.index') }}">Volver a planes</a>
	<br>
	{{-- <a href="{{ route('cables.edit', $cable) }}">Editar</a> --}}
	{{-- <a href="{{ route('packchannels.create') }}">Crear programcion</a> --}}
	<p>
		<strong>Dia: </strong>{{ $programation->day  }}
	</p>

	<p>
		<strong>Hora de inicio: </strong>{{ $programation->start_hour  }}
	</p>

	<p>
		<strong>Hora de fin: </strong>{{ $programation->end_hour  }}
	</p>
	{{-- <form action="{{ route('cables.destroy', $cable) }}" method="POST">
		@csrf
		@method('delete')
		<button type="submit">Eliminar</button>
	</form> --}}
@endsection