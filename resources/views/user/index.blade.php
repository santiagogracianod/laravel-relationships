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
        @if ($user->phone)
            <p> ( {{ $user->phone->prefix }} ) {{ $user->phone->phone_number }} </p>

        @else
            <p>No phone</p>
        @endif
        @if ($user->phoneSim)
            <p> {{ $user->phoneSim->company }} </p>

        @else
            <p>No sim</p>
        @endif


    @empty
        <h1>No users found</h1>
    @endforelse


</body>
</html>
