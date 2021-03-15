@extends('layouts.app')
@section('content')
<body>
	Total a pagar: {{ $invoice->price }}
	<a href="{{ route('home') }}">Volver</a>
</body>
@endsection