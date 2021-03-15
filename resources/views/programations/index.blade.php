@extends('layouts.plantilla')

@section('title','Programacion')

@section('content')
	<h1>Bienvenido a la página principal del channel</h1>
	{{-- <a href="{{ route('packchannels.create') }}">Crear plan</a> --}}
	<br>
	<ul>
		{{-- <tr>
			<th>id</th>
			<th>Nombre</th>
		</tr> --}}
		@foreach ($programations as $programation)
			{{-- para escribir lengua php --}}
			{{-- <tr>
				<td>{{ $curso->id }}</td>
				<td>{{  $curso->name }}</td>
			</tr> --}}

			<li>
				<a href="{{ route('programations.show', $programation) }}">{{  $programation->name }}</a>
			</li>

		@endforeach
	</ul>
	{{-- {{ $packchannels->links() }} --}}
@endsection