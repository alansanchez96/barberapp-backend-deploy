@extends('layouts.layout')

@section('content')
    <h1>Bienvenido DAshboard {{-- {{ $user->name }} --}}</h1>

    @if (session('status'))
        <h4>{{ session('status') }}</h4>
    @endif
@endsection
