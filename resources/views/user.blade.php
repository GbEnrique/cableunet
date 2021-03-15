@extends('layouts.app')
@section('content')
	<h1>Wellcome user</h1>
	<a href="{{ route('packservices.user') }}">Ver planes</a>
	<a href="{{ route('invoices.create') }}">Ver factura</a>
@endsection