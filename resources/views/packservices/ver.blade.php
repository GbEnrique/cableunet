@extends('layouts.app')
@section('content')
<body>
	<h1>Wellcome</h1>
	<a href="{{ route('packservices.user') }}">Volver a planes</a>
	<p>
		<strong>Plan de internet: </strong>{{ $internet ? $internet->name : 'Ninguno'  }}
	</p>
	<p>
		<strong>Plan de telephone: </strong>{{ $telephone ? $telephone->name : 'Ninguno'  }}
	{{-- {{  $telephone->name  }} --}}
	<p>
		<strong>Plan de cable: </strong>{{ $cable ? $cable->name : 'Ninguno'  }}
	</p>
	<p>
		<strong>Precio:: </strong>{{ $packservice->price  }}
	</p>
	<form action="{{ route('invoices.store') }}" method="post">
		@csrf
		<input type="hidden" name="price" value="{{ $packservice->price }}">
		<input type="hidden" name="user_id" value="{{ $user->id }}">
		<button type="submit">selecionar Plan</button>
	</form>
</body>
@endsection

