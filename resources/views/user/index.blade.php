<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Users list</h1>
    @forelse ($users as $user)
    <h3> {{ $user->name }} </h3>
    <p> {{ $user->email }} </p>
    <p> {{ $user->phone->prefix }} </p>
    <p> {{ $user->phone->phone_number }} </p>

    @empty
        <h1>No users found</h1>
    @endforelse
</body>
</html>
