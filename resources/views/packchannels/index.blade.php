@extends('layouts.plantilla')

@section('title','Packchannel')

@section('content')
	<h1>Bienvenido a la página principal de paquete de canales</h1>
	{{-- <a href="{{ route('packchannels.create') }}">Crear plan</a> --}}
	<br>
	<ul>
		{{-- <tr>
			<th>id</th>
			<th>Nombre</th>
		</tr> --}}
		@foreach ($packchannels as $packchannel)
			{{-- para escribir lengua php --}}
			{{-- <tr>
				<td>{{ $curso->id }}</td>
				<td>{{  $curso->name }}</td>
			</tr> --}}

			<li>
				<a href="{{ route('packchannels.show', $packchannel) }}">{{  $packchannel->name }}</a>
			</li>

		@endforeach
	</ul>
	{{-- {{ $packchannels->links() }} --}}
@endsection