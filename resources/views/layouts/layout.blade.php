<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            @guest
                <li><a href="{{ route('auth.login') }}">Login</a></li>
            @else
                <li><a href="{{ route('auth.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('auth.logout') }}">Logout</a></li>
            @endguest
        </nav>
    </header>

    @yield('content')

    {{-- Footer --}}
</body>

</html>
