<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
                <div class="container"></div>
                    <div class="row">
                        <div class="col-6">
                            <h1>All Users List</h1>
                                <table class="table table-bordered table-striped"  >
                                            <tr></tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Age</th>
                                                <th>City</th>
                                            </tr>
                                         @foreach ( $data as $id =>$users )
                                            <tr>
                                                <td>{{$users->id}}</td>
                                                <td>{{$users->name}}</td>
                                                <td>{{$users->email}}</td>
                                                <td>{{$users->age}}</td>
                                                <td>{{$users->city}}</td>

                                            </tr>
                                    @endforeach
                                </table>
                        </div>
                    </div>
</div>
</body>
</html>













{{--
<h1>All Users List</h1>

@foreach ( $data as $id =>$users )

        <h3>
                {{$users->name}}|
                {{$users->email}}|
                {{$users->age}}|
                {{$users->city}}|
        </h3>

@endforeach --}}
