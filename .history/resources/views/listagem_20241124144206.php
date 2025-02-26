<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Produtos</title>
</head>
<body>
    <h1>Listagem de Produtos</h1>
    <ul>
        @foreach ($produtos as $produto)
            <li>
                Nome: {{ $produto->nome }}, 
                Descrição: {{ $produto->descricao }} 
                <a href="{{ url('/produtos/mostra?id=' . $produto->id) }}">Detalhes</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
