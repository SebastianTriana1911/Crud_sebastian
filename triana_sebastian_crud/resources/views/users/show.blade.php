@extends("layouts.app")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @section("content")
        <div class="container">
            <br>
                <h1>Records of the users {{$users -> name}} {{$users -> last_name}}</h1>
            <br>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Num Doc</th>
                        <th scope="col">Type Doc</th>
                        <th scope="col">Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>
        
                <tr>
                    <th scope="row">{{$users -> id}}</th>
                    <td>{{$users -> doc_num}}</td>
                    <td>{{$users -> doc_type}}</td>
                    <td>{{$users -> name}}</td>
                    <td>{{$users -> last_name}}</td>
                    <td>{{$users -> phone}}</td>
                    <td>{{$users -> user_name}}</td>
                    <td>{{$users -> email}}</td>
                    <td>{{$users -> role -> role_name}}</td>
                    
                </tr>
        
            </table>

            <br>
            <a class="btn btn-primary" href="{{ route ("users.index") }}" role="button">Return to the start</a>

        </div>
    @endsection
</body>
</html>