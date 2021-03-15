@extends('layouts.plantilla')

@section('title','Packchannel')

@section('content')
	<h1>Bienvenido a la página principal de packchannel</h1>
	{{-- <a href="{{ route('packchannels.create') }}">Crear plan</a> --}}
	<br>
	<ul>
		@foreach ($channels as $channel)
			<li>
				<a href="{{ route('channels.show', $channel) }}">{{  $channel->name }}</a>
			</li>

		@endforeach
	</ul>
	{{-- {{ $channels->links() }} --}}
@endsection