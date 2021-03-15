@extends('layouts.plantilla')

@section('title','PackService')

@section('content')
	<h1>Bienvenido a la página de Paquete de servicios</h1>
	<a href="{{ route('packservices.create') }}">Crear paquete</a>
	<ul>
		{{-- <tr>
			<th>id</th>
			<th>Nombre</th>
		</tr> --}}
		@foreach ($packservices as $packservice)
			{{-- para escribir lengua php --}}
			{{-- <tr>
				<td>{{ $curso->id }}</td>
				<td>{{  $curso->name }}</td>
			</tr> --}}

			<li>
				<a href="{{ route('packservices.show', $packservice) }}">{{  $packservice->name }}</a>
			</li>

		@endforeach

@endsection