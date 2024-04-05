<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Controle de Estoque</title>
</head>
<body>
    <div class="container">
        <h1>Detalhes do produto: <?= $produto->nome ?></h1>
        <ul>
            <li>
                <b>Valor: </b> R$ <?= $produto->valor ?>
            </li>
            <li>
                <b>Descrição: </b><?= $produto->descricao ?>
            </li>
            <li>
                <b>Quantidade em estoque: </b><?= $produto->quantidade ?>
            </li>
        </ul>
    </div>
</body>
</html>
