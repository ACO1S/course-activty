<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All User Profiles</title>
</head>
<body>

    <h1>User Profiles</h1>

    @foreach ($profiles as $profile)
        <div>
            <h2>Name: {{$profile->user->name}}</h2>
            <p><strong>Email:</strong> {{$profile->user->email}}</p>
            <p><strong>Bio:</strong> {{$profile->bio}}</p>
            <p><strong>School:</strong> {{$profile->school}}</p>
        </div>

        <hr>
    @endforeach

</body>
</html>
