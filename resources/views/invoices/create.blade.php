@extends('layouts.app')
@section('content')
<body>
	<h1>Su factura/invoce</h1>
	<a href="{{ route('home') }}">Volver</a>
	<br>
	<h2>Paquetes suscritos</h2>
	@php
		$total=0;
	@endphp
	<u>
		
			@foreach ($invoices as $invoice)
			@php
				 $total += $invoice->price;
			@endphp
				@foreach ($packservices as $packservice)
					@if ($invoice->packservice_id == $packservice->id)
						<ul>{{ $packservice->name }}</ul>
					@endif
				@endforeach
			@endforeach

	</u>

	Total a pagar:{{ $total }}
	
</body>
@endsection