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
    if($salario<1500){
    $novosalario = $salario * 1.15;
    ?>
     <p>Sálario antigo: <?=$salario?>| Sálario atual: <?=$novosalario?> </p>
    <?php
    }elseif ($salario<=3000) {
    $novosalario = $salario *1.10; 
    ?>
    <p>Sálario antigo: <?=$salario?>| Sálario atual: <?=$novosalario?> </p>
    <?php
    }else {
    $novosalario = $salario *1.05;
    }
    ?>

</body>
</html>