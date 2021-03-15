@extends('layouts.plantilla')

@section('title','Telephone')

@section('content')
	<h1>Bienvenido a la página principal de Telephones</h1>
	<a href="{{ route('telephones.create') }}">Crear Curso</a>
	<br>
	<ul>
		{{-- <tr>
			<th>id</th>
			<th>Nombre</th>
		</tr> --}}
		@foreach ($telephones as $telephone)
			{{-- para escribir lengua php --}}
			{{-- <tr>
				<td>{{ $curso->id }}</td>
				<td>{{  $curso->name }}</td>
			</tr> --}}

			<li>
				<a href="{{ route('telephones.show', $telephone) }}">{{  $telephone->name }}</a>
			</li>

		@endforeach
		{{ $telephones->links() }}
@endsection