@extends('layouts.plantilla')
{{-- @extends('layouts.app') --}}


@section('content')

<h1>Bienvenidos a la pagina principal</h1>
        Hola  {{  $user->status }}
@endsection
