<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="d-flex flex-column justifly-content-center align-items-center">
        <h1>Student List</h1>
        <table class="table">

            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->student_ID}}</td>
                    <td>{{$student->name}}</td>
                    <td>
                        <form action="{{route('students.destroy',$student->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a href="{{route('students.edit',$student->id)}}" class="btn btn-warning">Edit</a>
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('students.create')}}" class="btn btn-primary">Add Student</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
