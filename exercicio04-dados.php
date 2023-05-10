<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xercício 04 PHP</title>
</head>
<body>
    <h1>Exercício 04 PHP</h1>
    <hr>
<?php 


if( empty($_POST["nomedoproduto"]) || empty($_POST["preco"])) {
?>
<p style="color :red">Você deve preencher nome do produto e preço</p>

<?php
} else {

$nomedoproduto = $_POST['nomedoproduto'];
$preco = $_POST['preco'];
$fabricante = $_POST['fabricante'];
$descricao = $_POST['descricao'];

$precoFormatado = number_format($preco, 2, ",",".");

?>

<h2>Dados Recebidos</h2>
<ul>
<li>Nome do Produto: <?=$nomedoproduto?></li>
<li>Preço: <?=$precoFormatado?></li>
<?php if(!empty($fabricante)){ ?>
<li>fabricante: <?=$fabricante?></li>
<?php }?>
<?php if(!empty($descricao) ) { ?>
<li>Descrição: <?=$descricao?></li>

<?php } ?>
</ul>
<?php
}
?>




</body>
</html>