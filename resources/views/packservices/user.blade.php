@extends('layouts.app')
@section('content')

<body>
		<h1>Bienvenido a la página de Paquete de servicios</h1>
		<a href="{{ route('home') }}">Volver</a>
		<br>
	<ul>

		@foreach ($packservices as $packservice)

		

			<li>
				<a href="{{ route('packservices.ver', $packservice) }}">{{  $packservice->name }}</a>
			</li>

		@endforeach

		
</body>

@endsection