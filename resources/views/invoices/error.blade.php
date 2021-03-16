@extends('layouts.app')
@section('content')
<body>
	<h1>Error</h1>
	<h2>Ya estas suscrito a este plan</h2>
	<a href="{{ route('packservices.user') }}">Volver a planes</a>
</body>
@endsection