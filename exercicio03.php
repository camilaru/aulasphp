<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>

<body>
    <h1>Exercício 3</h1>
    <hr>
    <?php
    $salario = 2000;
    if ($salario < 1500) {
        $novoSalario = $salario * 1.15;
    ?>
        <p>Sálario antigo: <?= $salario ?>| Sálario atual: <?= $novoSalario ?> </p>
    <?php
    } elseif ($salario <= 3000) {
        $novoSalario = $salario * 1.10;
    ?>
        <p>Sálario antigo: <?= $salario ?>| Sálario atual: <?= $novoSalario ?> </p>
    <?php
    } else {
        $novoSalario = $salario * 1.05;
    }
    ?>
    <p>Salário antigo:
    <?=number_format($salario, 2, ",",".")?>
    </p>

    <p>Salário novo:
    <?=number_format($novoSalario, 2, ",","." )?>
    </p>

</body>

</html>