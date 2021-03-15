@extends('layouts.plantilla')

@section('title','Telephone')

@section('content')
	<h1>Bienvenido a la página principal de Usuarios Regist</h1>
	{{-- <a href="{{ route('telephones.create') }}">Crear Curso</a> --}}
	<br>
	<ul>
		{{-- <tr>
			<th>id</th>
			<th>Nombre</th>
		</tr> --}}
		@foreach ($users as $user)
			{{-- para escribir lengua php --}}
			{{-- <tr>
				<td>{{ $curso->id }}</td>
				<td>{{  $curso->name }}</td>
			</tr> --}}

			<li>
				<a href="{{ route('users.show', $user) }}">{{  $user->name }}</a>
			</li>

		@endforeach
		{{ $users->links() }}
@endsection