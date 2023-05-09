<?php
//Detectar o nome do arqeuivo ou página aberto no momento
$pagina = basename($_SERVER["PHP_SELF"]);
// Analisando qual é a página aberta e determinando o título
switch ($pagina) {
    case "index.php":
        $titulo = "Página Inicial";
        break;
    case "produtos.php":
        $titulo = "Produtos";
        break;
    case "servicos.php":
        $titulo = "Serviços";
        break;
    default:
        $titulo = "contato";
        break;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site PHP <?= $titulo ?></title>
    <!-- Atenção ao caminho do CSS:
    a Referência é a raiz deste projeto, ou seja, 
    a própria pasta 06 onde as inclisõers ocorrem 
    junto com cada página -->
    <link rel="stylesheet" href="css/estilos.css">
    <!-- Somente se estiver na pagina PHP carregue a linha abaixo -->
    <?php if ($pagina == "contato.php") { ?>
        <link rel="stylesheet" href="css/contato.css">
    <?php } ?>
</head>

<body>
    <header>
        <h1>Site PHP</h1>

        <nav>
            <a href="index.php">Inicial</a>
            <a href="produtos.php">Produtos</a>
            <a href="servicos.php">Serviços</a>
            <a href="Contato.php">Contato</a>
        </nav>
    </header>

    <main>