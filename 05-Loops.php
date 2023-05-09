<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>
    <h1> Loops (ou laços de repetição)</h1>
    <hr>

    <?php
    /* Loops tradicionais
    while
    for, do/while */

    ?>
    <h2> While (enquanto)</h2>
    <?php
    $i = 1; //variável de controle

    while ($i <= 5) {
    ?>
        <p>Senac Penha - PHP</p>
    <?php
        $i++;
    }
    ?>

    <h2>do/while</h2>
    <ul>
        <?php
        $j = 1;
        do {
        ?>
            <li>php</li>
        <?php
            $j++;
        } while ($j <= 5)
        ?>
    </ul>

    <hr>

    <h2>For</h2>
    <?php
    $bandas = ["Pink Floyd", "Savatage", "Slayer"];
    ?>

    <section>
        <h3>Bandas</h3>
        <?php for ($k = 0; $k < count($bandas); $k++) { ?>
            <p><?= $bandas[$k] ?></p>
        <?php
        }
        ?>
    </section>

    <H2>Exercício: lista de meses</H2>
    <p>Crie um array contendo a lista de todos os meses do ano</p>
    <p>Monte uma <b>lista ordenada</b> e, usando um <b>Loop</b>, Faça com que ela mostre o nome de cada mês.</p>

    <hr>

    <h2>Lista de Meses</h2>
    <?php
    $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    ?>

    <section>
        <h3>Meses</h3>
        <ol>
            <?php for ($m = 0; $m < count($meses); $m++) {
            ?>
                <li><?= $meses[$m] ?></li>
            <?php
            }
            ?>
        </ol>
    </section>

    <hr>

    <h2>foreach</h2>

    <?php foreach( $bandas as $banda) { ?>
        <p> Banda: <b> <?=$banda?> </b> </p>
        <?php } ?>




</body>

</html>