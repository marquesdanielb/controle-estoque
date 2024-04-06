<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
    <title>Controle de Estoque</title>
</head>
<body>
    <div class="container">

        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <a href="{{route('produtos')}}" class="navbar-brand">Estoque</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('produtos')}}">Listagem</a></li>
                </ul>
            </div>
        </nav>

        @yield('conteudo')

        <footer class="footer">
            <p>Controle de Estoque</p>
        </footer>
    </div>
</body>
</html>
