<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Produto</title>
</head>
<body>
    <h1>Detalhes do Produto</h1>
    <p><strong>Nome:</strong> {{ $p->nome }}</p>
    <p><strong>Descrição:</strong> {{ $p->descricao }}</p>
    <p><strong>Valor:</strong> R$ {{ number_format($p->valor, 2, ',', '.') }}</p>
    <p><strong>Quantidade:</strong> {{ $p->quantidade }}</p>
    <a href="{{ url('/produtos/lista') }}">Voltar à lista</a>
</body>
</html>
