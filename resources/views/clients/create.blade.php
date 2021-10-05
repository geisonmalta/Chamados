<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        label {
            display: block
        }

        input {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Criar cliente</h1>

    <a href="{{ route('clients.index')}}">Voltar</a>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf

        <div>
            <label>Nome</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Sobrenome</label>
            <input type="text" name="lastname">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label>CPF</label>
            <input type="text" name="cpf">
        </div>
        <div>
            <label>CNPJ</label>
            <input type="text" name="cnpj">
        </div>

        <button type="submit">Cadastrar cliente</button>
    </form>
</body>
</html>
