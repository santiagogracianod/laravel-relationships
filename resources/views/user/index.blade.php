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

        <h4>Phone list</h4>
        <ul>
            @forelse ($user->phones as $phone)
                <li> ( {{ $phone->prefix }} ) {{ $phone->phone_number }} </li>
            @empty
                No phones found
            @endforelse
        </ul>

        <h4>Sim list</h4>
        <ul>
            @forelse ($user->phoneSims as $sim)
                <li> {{ $sim->company }} </li>
            @empty
                No sims found
            @endforelse
        </ul>

    @empty
        <h1>No users found</h1>
    @endforelse


</body>
</html>
