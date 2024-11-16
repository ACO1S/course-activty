<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Users</title>
</head>
<body>

    @foreach ($courses as $course)
        <div>
            <h1>Course: {{$course->course_name}}</h1>
            <h2>Users:</h2>
            <ul>
                @foreach ($course->users as $user)
                    <li>{{$user->name}}</li>
                @endforeach
            </ul>
        </div>

        <hr>
    @endforeach

</body>
</html>
