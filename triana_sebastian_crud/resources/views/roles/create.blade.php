@extends("layouts.app")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @section("content")
        <br>
        <div class="container">
            <h1>Form Roles</h1>
            <br>

            <form action="{{ route("roles.store") }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="role_name" class="form-label">
                    Name of the rol
                </label>
                <input id="role_name" class="form-control" type="text" name="role_name" value="{{ old('role_name') }}"/>

                @error('role_name')
                    <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">
                    Description
                </label>
                <input id="description" class="form-control" type="text" name="description" value="{{ old('description') }}"/>

                @error('description')
                    <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Send</button>

        </form>
        
        <br>
        <a class="btn btn-primary" href="{{ route ("roles.index") }}" role="button">Return to the start</a>

        </div>
    @endsection
</body>
</html>