<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2 PHP</title>
</head>
<body>
    <h1>Exercício 02 PHP</h1>
    <hr>
    <h2>array - numérico OU associativos</h2>
    <hr>
    <?php
    $dados = [
        "usuario" => "Chapolin.colorado",
        "senha" => "123",
        "idade" => "30",
        "cidade" => "São Paulo",
    ]
    ?>
    <p><?=$dados["usuario"]?></p>
    
    <h2>Saída de Dados</h2>
    <ol>
        <li><?=$dados["usuario"]?></li>
        <li><?=$dados["idade"]?></li>
        <li><?=$dados["cidade"]?></li>

        



    </ol>

</body>
</html>