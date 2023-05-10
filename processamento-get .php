<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento usando método Get</title>
</head>
<body>
    <h1>Processamento usando Método Get</h1>
    <hr>
<?php 
//array superglobal $_GET[]



//CAPTURAR INDIVIDUALMENTE OS CAMPOS DO FORMULÁRIO
$nome = $_GET['nome'];
$email = $_GET['email'];
$assunto = $_GET['assunto'];
$mensagem = $_GET['mensagem'];
?>

<h2>Dados Recebidos</h2>
<ul>
<li>Nome: <?=$nome?></li>
<li>E-mail: <?=$email?></li>
<li>Assunto: <?=$assunto?></li>
<li>mensagem: <?=$mensagem?></li>
</ul>





</body>
</html>