@extends('layouts.plantilla')

@section('title','Packservices' ) {{-- $packservice->name --}}

@section('content')
	<h1>Bienvenido al paquet {{--$packservice->name--}} </h1>
	<a href="{{ route('packservices.index') }}">Volver a planes</a>
	<br>
	{{-- <a href="{{ route('cables.edit', $cable) }}">Editar</a> --}}
	{{-- <a href="{{ route('packchannels.create') }}">Crear programcion</a> --}}
	<p>
		<strong>Plan de internet: </strong>{{ $internet ? $internet->name : 'Ninguno'  }}
	</p>
{{-- {{ $internet->name  }} --}}
	<p>
		<strong>Plan de telephone: </strong>{{ $telephone ? $telephone->name : 'Ninguno'  }}
	{{-- {{  $telephone->name  }} --}}
	<p>
		<strong>Plan de cable: </strong>{{ $cable ? $cable->name : 'Ninguno'  }}
	</p>

	<p>
		<strong>Precio:: </strong>{{ $packservice->price  }}
	</p>
	{{-- <form action="{{ route('cables.destroy', $cable) }}" method="POST">
		@csrf
		@method('delete')
		<button type="submit">Eliminar</button>
	</form> --}}
@endsection