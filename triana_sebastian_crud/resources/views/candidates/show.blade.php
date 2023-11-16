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
                <h1>Records of the candidate {{$candidate -> users -> name}} {{$candidate -> users -> last_name}}</h1>
            <br>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Id of the User</th>
                        <th scope="col">Document of the User</th>
                        <th scope="col">Type document</th>
                        <th scope="col">Name of the User</th>
                        <th scope="col">Status</th>
                        <th scope="col">Points</th>
                    </tr>
                </thead>
        
                <tr>
                    <th scope="row">{{$candidate -> id}}</th>
                    <td>{{$candidate -> user_id}}</td>
                    <td>{{$candidate -> users -> doc_num}}</td>
                    <td>{{$candidate -> users -> doc_type}}</td>
                    <td>{{$candidate -> users -> name}} {{$candidate -> users -> last_name}}</td>
                    <td>{{$candidate -> selection_status}}</td>
                    <td>{{$candidate -> points}}</td>
                </tr>
        
            </table>

            <br>
            <a class="btn btn-primary" href="{{ route ("candidates.index") }}" role="button">Return to the start</a>

        </div>
    @endsection
</body>
</html>