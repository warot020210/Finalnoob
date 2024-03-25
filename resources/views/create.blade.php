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
        <h1>Add Student</h1>
        <form action="{{route('students.store')}}" method="POST">
            @csrf
            <label for="student_id">student_id</label>
            <input id="student_id" type="text" name="student_id">
            <label for="name">name</label>
            <input id="name" type="text" name="name">
            <button class="btn btn-primary" type="submit">save</button>
        </form>
        <a href="{{route('students.index')}}"class="btn btn-secondary">back</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
