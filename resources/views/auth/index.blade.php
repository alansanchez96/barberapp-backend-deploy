@extends('layouts.layout')

@section('content')
    <h1>Login</h1>

    {{-- @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach --}}

    @error('credenciales')
        {{ $message }}
    @enderror

    <form action="" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Email.."> <br>
        @error('email')
            {{ $message }} <br>
        @enderror
        <input type="password" name="password" placeholder="Password..."> <br>
        @error('password')
            {{ $message }} <br>
        @enderror
        <label for="">
            <input type="checkbox" name="remember">Recuerdame <br> <br>
        </label>
        <button>Entrar</button>
    </form>
@endsection
