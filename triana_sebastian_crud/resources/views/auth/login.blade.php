@extends("layouts.app")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .title{
            display: flex;
            width: 100%;
            height: 100%;
            justify-content: center;
        }
    </style>

    <br>
    <div class="container">
        <h1 class="title">LOGIN TALENTO HUMANO</h1>

        @section('content')

            <form action="{{ route('login') }}" method="POST" novalidate>
                @csrf

                {{-- <div class="registro">
                <div class="mb-3">
                    <label for="email" class="form-label">
                        <strong>Email:</strong>
                    </label>
                    <input id="email" aria-describedby="rol" type="email" name="email" class="form-control" value="{{ old('email') }}" />
    
                    @error('email')
                        <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">
                        <strong>Password:</strong>
                    </label>
                    <input id="password" aria-describedby="rol" type="password" name="password" class="form-control" value="{{ old('password') }}" />
    
                    @error('password')
                        <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
                    @enderror
                </div>

                </div> --}}

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

    </div>
</body>
</html>