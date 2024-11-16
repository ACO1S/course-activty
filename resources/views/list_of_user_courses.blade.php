<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Courses</title>
</head>
<body>

    <div>
        <h1>User Name: {{$user->name}}</h1>
    </div>

    <div>
        <h2>Courses:</h2>
        <ul>
            @foreach ($user->courses as $course)
                <li>{{ $course->course_name }}</li>
            @endforeach
        </ul>
    </div>

</body>
</html>
