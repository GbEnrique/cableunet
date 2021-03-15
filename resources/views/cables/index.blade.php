@extends('layouts.plantilla')

@section('title','Cable')

@section('content')
	<h1>Bienvenido a la página principal de Cable</h1>
	<a href="{{ route('cables.create') }}">Crear plan</a>
	<br>
	<ul>
		{{-- <tr>
			<th>id</th>
			<th>Nombre</th>
		</tr> --}}
		@foreach ($cables as $cable)
			{{-- para escribir lengua php --}}
			{{-- <tr>
				<td>{{ $curso->id }}</td>
				<td>{{  $curso->name }}</td>
			</tr> --}}

			<li>
				<a href="{{ route('cables.show', $cable) }}">{{  $cable->name }}</a>
			</li>

		@endforeach
		{{ $cables->links() }}
@endsection