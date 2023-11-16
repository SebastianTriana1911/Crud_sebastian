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
            <h1>Table Roles</h1>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Role_name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
        
                @foreach($roles as $rol)
                <tr>
                    <th scope="row">{{$rol -> id}}</th>
                    <td>{{$rol -> role_name}}</td>
                    <th class="tr">
                        <a class="btn btn-primary" href="{{ route("roles.show", $rol -> id) }}" role="button">Show</a>
                        <a class="btn btn-success" href="{{ route("roles.edit", $rol -> id) }}" role="button">Update</a>

                        <form action="{{ route("roles.destroy", $rol -> id) }}" method="POST">
                            @csrf

                            @method("delete")
                            
                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>
                    </th>
                </tr>
            @endforeach
        
    </table>

    <br>
    <a class="btn btn-primary" href="{{ route ("roles.create") }}" role="button">Create a Rol</a>

    </div>

    @endsection
</body>
</html>