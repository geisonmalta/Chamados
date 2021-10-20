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
    <h1>Criar empresa</h1>

    <a href="{{ route('companies.index')}}">Voltar</a>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('companies.store') }}" method="POST">
        @csrf

        <div>
            <label>Nome</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>CNPJ</label>
            <input type="text" name="cnpj">
        </div>

        {{-- <div>
            <label>logo</label>
            <input type="file" name="logo">
        </div> --}}

        <button type="submit">Cadastrar empresa</button>
    </form>
</body>
</html>
