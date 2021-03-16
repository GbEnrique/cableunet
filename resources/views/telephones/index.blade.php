@extends('layouts.plantilla')

@section('title','Telephone')

@section('content')
	<h1>Bienvenido a la página principal de Telephones</h1>
	<a href="{{ route('telephones.create') }}">Crear Plan</a>
	<br>
	<ul>

		@foreach ($telephones as $telephone)

			<li>
				<a href="{{ route('telephones.show', $telephone) }}">{{  $telephone->name }}</a>
			</li>

		@endforeach
	</ul>
		{{ $telephones->links() }}
@endsection