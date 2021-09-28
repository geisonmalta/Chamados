<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalhes do cliente {{ $client->name }}</h1>

    <a href="{{ route('clients.index') }}">Voltar</a>

    <p>Name - {{ $client->name }}</p>
    <p>Lastname - {{ $client->lastname }}</p>
    <p>Cpf - {{ $client->cpf }}</p>
    <p>Cnpj - {{ $client->cnpj }}</p>
    <p>Email - {{ $client->email }}</p>

    <a href="{{ route('clients.edit', $client) }}">Editar</a>
</body>
</html>
