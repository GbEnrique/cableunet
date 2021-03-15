@extends('layouts.app')
@section('content')
<body>
	<h1>Su factura/invoce</h1>
	<a href="{{ route('home') }}">Volver</a>
	<br>
	Total a pagar:{{ $invoice ? $invoice->price : 'No esta suscrito a ningun plan' }}
	
</body>
@endsection