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
        .tr {
            display:flex;
            gap: 25px;
        }
    </style>
    
    @section("content")
        <div class="container">
            <br>
            <h1>Table Candidate</h1>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name Candidate</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                @foreach($candidates as $candidate)
                <tr>
                    <th scope="row">{{$candidate -> id}}</th>
                    <td>{{$candidate -> users -> name}} {{$candidate -> users -> last_name}}</td>
                    <th class="tr">
                        <a class="btn btn-primary" href="{{ route("candidates.show", $candidate -> id) }}" role="button">Show</a>
                        <a class="btn btn-success" href="{{ route("candidates.edit", $candidate -> id) }}" role="button">Update</a>

                        <form action="{{ route("candidates.destroy", $candidate -> id) }}" method="POST">
                            @csrf

                            @method("delete")
                            
                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>
                    </th>
                </tr>
            @endforeach
        
    </table>

    <br>
    <a class="btn btn-primary" href="{{ route ("candidates.create") }}" role="button">Create a Candidate</a>

    </div>

    @endsection
</body>
</html>