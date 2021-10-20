<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalhes da empresa {{ $company->name }}</h1>

    <a href="{{ route('companies.index') }}">Voltar</a>

    <p>Name - {{ $company->name }}</p>
    <p>Cnpj - {{ $company->cnpj }}</p>

    <a href="{{ route('companies.edit', $company) }}">Editar</a>
</body>
</html>
