<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-primi-passi</title>
</head>
<body>
    @foreach ($users as $user)

        <h1>
            ciao {{ $user['nome'] . ' ' . $user['cognome'] }}
        </h1>

    @endforeach


</body>
</html>
