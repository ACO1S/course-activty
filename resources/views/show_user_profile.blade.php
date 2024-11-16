<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>

    <h1>User Profile</h1>

    <div>
        <h2>User Details</h2>
        <p><strong>Name:</strong> {{$user->name}}</p>
        <p><strong>Email:</strong> {{$user->email}}</p>
    </div>

    <div>
        <h2>Profile</h2>
        <p><strong>Bio:</strong> {{$user->profile->bio}}</p>
        <p><strong>School:</strong> {{$user->profile->school}}</p>
    </div>

    <hr>

</body>
</html>
