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
            <h1>Form Users</h1>
        <br>

        <form action="{{ route("users.store") }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="" class="form-label">
                    <strong>Type Document:</strong>
                </label> <br>

                <div class="form-check">
                    <input id="CC" class="form-check-input" type="radio" name="doc_type" value="CC">
                    <label class="form-check-label" for="CC">
                      CC
                    </label>
                  </div>

                  <div class="form-check">
                    <input id="TI" class="form-check-input" type="radio" name="doc_type" value="TI">
                    <label class="form-check-label" for="TI">
                      TI
                    </label>
                    <br>
                </div>

                @error('doc_type')
                    <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    <strong>Number Document:</strong>
                </label>
                <input id="role1" aria-describedby="rol" type="text" name="doc_num" class="form-control" value="{{ old('doc_num') }}" />

                @error('doc_num')
                    <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    <strong>Name:</strong>
                </label>
                <input id="role1" aria-describedby="rol" type="text" name="name" class="form-control" value="{{ old('name') }}" />

                @error('name')
                    <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    <strong>Last Name:</strong>
                </label>
                <input id="role1" aria-describedby="rol" type="text" name="last_name" class="form-control" value="{{ old('last_name') }}" />

                @error('last_name')
                    <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    <strong>Phone:</strong>
                </label>
                <input id="role1" aria-describedby="rol" type="text" name="phone" class="form-control" value="{{ old('phone') }}" />

                @error('phone')
                    <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    <strong>User Name:</strong>
                </label>
                <input id="role1" aria-describedby="rol" type="text" name="user_name" class="form-control" value="{{ old('user_name') }}" />

                @error('user_name')
                    <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    <strong>Email:</strong>
                </label>
                <input id="role1" aria-describedby="rol" type="email" name="email" class="form-control" value="{{ old('email') }}" />

                @error('email')
                    <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    <strong>Password:</strong>
                </label>
                <input id="role1" aria-describedby="rol" type="password" name="password" class="form-control" value="{{ old('password') }}" />

                @error('password')
                    <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    <strong>Rol Id:</strong>
                </label>
                <input id="role1" aria-describedby="rol" type="number" name="role_id" class="form-control" value="{{ old('role_id') }}" />

                @error('role_id')
                    <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
        </form>
            <br>
            <a class="btn btn-primary" href="{{ route ("login") }}" role="button">Return to the login</a>
        </div>

    @endsection
</body>
</html>