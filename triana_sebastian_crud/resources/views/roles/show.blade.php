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
                <h1>Records of the role {{$roles -> role_name}}</h1>
            <br>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Role_name</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
        
                <tr>
                    <th scope="row">{{$roles -> id}}</th>
                    <td>{{$roles -> role_name}}</td>
                    <td>{{$roles -> description}}</td>
                </tr>
        
            </table>

            <br>
            <a class="btn btn-primary" href="{{ route ("roles.index") }}" role="button">Return to the start</a>

        </div>
    @endsection
</body>
</html>