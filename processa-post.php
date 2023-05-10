<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento usando método Post</title>
</head>
<body>
    <h1>Processamento usando método Post</h1>
    <hr>
<?php 
//array superglobal $_POST[]

if( empty($_POST["nome"] || empty($_POST["email"]))) {
?>
<p style="color :red">Você deve preencher nome e e-mail</p>

<?php
} else {

//CAPTURAR INDIVIDUALMENTE OS CAMPOS DO FORMULÁRIO
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
?>

<h2>Dados Recebidos</h2>
<ul>
<li>Nome: <?=$nome?></li>
<li>E-mail: <?=$email?></li>
<?php if(!empty($assunto)){ ?>
<li>Assunto: <?=$assunto?></li>
<?php }?>
<?php if(!empty($mensagem) ) { ?>
<li>mensagem: <?=$mensagem?></li>
<?php } ?>
</ul>
<?php
}
?>




</body>
</html>