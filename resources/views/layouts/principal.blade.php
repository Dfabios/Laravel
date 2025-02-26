<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <title>Controle de estoque</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/produtos">
                        Estoque <i class="bi bi-cart4"></i>
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/produtos/lista">Visualizar Produtos <i class="bi bi-eye"></i> |</a></li>
                    <li><a href="/produtos/novo">Novo Produto <i class="bi bi-folder-plus"> </i></a></li>
                </ul>
            </div>
        </nav>
        @yield('conteudo')
        <footer class="footer">
            <p>© Fábio Salvador 2025.</p>
        </footer>
    </div>
</body>

</html>
