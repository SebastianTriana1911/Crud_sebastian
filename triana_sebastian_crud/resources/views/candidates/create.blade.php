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
            <h1>Form Candidates</h1>
            <br>

            <form action="{{ route("candidates.store") }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="user_id" class="form-label">
                    Id of User
                </label>
                <input id="user_id" class="form-control" type="number" name="user_id" value="{{ old('user_id') }}"/>

                @error('user_id')
                    <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
                @enderror
            </div>

            <div class="mb-3">
                <label for="selection_status" class="form-label">
                    Status
                </label>
                <select id="selection_status" class="form-select form-select-sm" aria-label="Small select example" name="selection_status">
                    <option selected>Select his status</option>
                    <option name="selection_status" value="EN ESTUDIO">EN ESTUDIO</option>
                    <option name="selection_status" value="SELECCIONADO">SELECCIONADO</option>
                </select>

                @error('selection_status')
                    <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
                @enderror
            </div>

            <div class="mb-3">
                <label for="points" class="form-label">
                    Points
                </label>
                <input id="points" class="form-control" type="number" name="points" value="{{ old('points') }}"/>

                @error('points')
                    <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Send</button>

        </form>
        
        <br>
        <a class="btn btn-primary" href="{{ route ("candidates.index") }}" role="button">Return to the start</a>

        </div>
    @endsection
</body>
</html>