<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
/>
</head>
<body>
    <h1 class="text-center">crud</h1>
    <div class="container-fluid  ">
        <div class="row ">
            <div class="col-7 mx-auto">
                <form action="{{route('create-user')}}" method="POST">
                @if(Session::has('fail'))
                <div class="alert alert-danger ">{{Session::get('fail')}}</div>
                @endif
                @csrf
                    <div>
                        <input type="text" placeholder="Employee Name" class="form-control mb-3" name="name">
                    </div>
                    <div>
                        <input type="text" placeholder="Place" class="form-control mb-3" name="place">
                    </div>
                    <div>
                        <input type="text" placeholder="Employee Id" class="form-control mb-3" name="employee_id">
                    </div>
                    <div> 
                        <input type="submit" class="form-control bg-success">
                    </div>
                </form>
            </div>
            <div class="col-7 mx-auto mt-5">
                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Place</th>
                        <th>Employee Id</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    @foreach ($data as $details)
                    <tbody>
                        <td>{{$details->name}}</td>
                        <td>{{$details->place}}</td>
                        <td>{{$details->employee_id}}</td>
                        <td><a href="edit/{{ $details->id }}" class="btn btn-primary">Edit</a> </td>
                        <td><a href="delete/{{ $details->id }}" class="btn btn-danger">Delete</a></td>
                        <td></td>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        
    </div>
</body>
</html>