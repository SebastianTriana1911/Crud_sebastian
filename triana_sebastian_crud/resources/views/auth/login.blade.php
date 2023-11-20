@extends("layouts.app")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login talento humano</h1>

    @section('content')

        <form action="{{ route('login') }}" method="POST" novalidate>
            @csrf

            @if (session('mensaje'))
                <h6>{{ session('mensaje') }}</h6>   
            @endif

            <input type="email" name="email" id="" placeholder="Email" value="{{ old('email') }}">
            @error('email')
                <h6>{{ $message }}</h6>
            @enderror
            
            <br><br>

            <input type="password" name="password" id="" placeholder="Password">
            @error('password')
                <h6>{{ $message }}</h6>
            @enderror

            <input type="submit" name="login" value="Login">

        </form> 


@endsection
</body>
</html>