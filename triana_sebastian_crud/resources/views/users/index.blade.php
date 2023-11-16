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
            <h1>Table Users</h1>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
        
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user -> id}}</th>
                    <td>{{$user -> name}} {{$user -> last_name}}</td>
                    <th class="tr">
                        <a class="btn btn-primary" href="{{ route("users.show", $user -> id) }}" role="button">Show</a>
                        <a class="btn btn-success" href="{{ route("users.edit", $user -> id) }}" role="button">Update</a>

                        <form action="{{ route("users.destroy", $user -> id) }}" method="POST">
                            @csrf

                            @method("delete")
                            
                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>
                    </th>
                </tr>
            @endforeach
        
    </table>

    <br>
    <a class="btn btn-primary" href="{{ route ("users.create") }}" role="button">Create a Users</a>

    </div>

    @endsection
</body>
</html>