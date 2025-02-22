<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>condicionaisphp</title>
    <style>
        .normal {
            background-color: lightgreen;
            color: green;
        }
        .repor {
            background-color: lightpink;
            color: red;
        }
        .urgente {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h1>Condicionais PHP</h1>
    <hr>

    <h2>Simples</h2>
    <?php
     $numero = 1;
     if($numero>=5){
        echo "<p>numero é maior/igual a 5</p>";  
     }
    ?>

    <h2>Composta</h2>
    <?php
    $produto = "Ultrabook";
    $qtdEmEstoque = 10; //o que temos no momento
    $qtdCritica = 5; //Minimo necessario

    echo "<h3>Produto: $produto</h3>";
    echo "<h4>Estoque: $qtdEmEstoque</h4>";

     if( $qtdEmEstoque < $qtdCritica ){
        echo "<p class='repor'>É necessario comprar/repor!</p>";

        if ( $qtdEmEstoque == 0 ){
            echo"<p><spam class='urgente'>URGENTE!</spam></p>";
        
        }

     } else {
        echo "<p class='normal'>estoque normal!</p>";
     }

    ?>

    <h2>Encadeada</h2>
    <?php
    // if($produto == "Ultrabook"){
    //     $garantia = 3;
    // } elseif($produto == "Geladeira"){
    //     $garantia = 5;
    // } elseif($produto =="Tv"){
    //     $garantia = 2;
    // } else{
    //     $garantia = 1;
    // }

    switch($produto){
        case "Ultrabook" : $garantia = 3; break;
        case "Geladeira" : $garantia = 5; break;
        case "Tv" : $garantia = 2; break;
        default : $garantia = 1; break;
        }


    echo "<p>O $produto tem garantia de $garantia ano(s)</p>";



    ?>

</body>
</html>