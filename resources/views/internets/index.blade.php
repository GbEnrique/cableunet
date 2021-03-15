@extends('layouts.plantilla')

@section('title','internet')

@section('content')
	<h1>Bienvenido a la página principal de internet</h1>
	<a href="{{ route('internets.create') }}">Crear Plan</a>
	<br>
	<ul>
		{{-- <tr>
			<th>id</th>
			<th>Nombre</th>
		</tr> --}}
		@foreach ($internets as $internet)
			{{-- para escribir lengua php --}}
			{{-- <tr>
				<td>{{ $curso->id }}</td>
				<td>{{  $curso->name }}</td>
			</tr> --}}

			<li>
				<a href="{{ route('internets.show', $internet) }}">{{  $internet->name }}</a>
			</li>

		@endforeach
	</ul>
	{{ $internets->links() }}
@endsection