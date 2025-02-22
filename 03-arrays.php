<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Arrays</title>
</head>
<body>
<h1>Arrays (vetores ou matrizes)</h1>
<hr>

<h2>Array com índice numérico</h2>
<?php
// Declarando arrays como variáveis
$bandas = ["Rush", "Slayer", "Iron Maiden"];
$cursos = array("HTML5", "PHP", "Design", "JS");

// Declarando arrays como constantes
const UNIDADES_SENAC = ["Penha", "Itaquera"];
define("UNIDADES_SESC", ["Belenzinho", "Bertioga"]);
?>

<h3>Saída de dados de arrays</h3>
<ul>
    <li>Banda que mais gosto: <?=$bandas[0]?> </li>
    <li>Assunto estudado: <?=$cursos[1]?></li>
    <li>Estamos no Senac <?=UNIDADES_SENAC[0]?></li>
    <li>O Sesc <?=UNIDADES_SESC[1]?> é uma colônia 
    de férias.</li>
</ul>

<h2>Array Associativo</h2>
<?php
/* chaves associativas */
$livro = [
    "titulo" => "Senhor dos Anéis",
    "autor" => "J.R.R. Tolkien",
    "ano" => 1954
];
?>
<p>Livro: <?=$livro["titulo"]?></p>
<p>Escrito por: <?=$livro["autor"]?>
 em <?=$livro["ano"]?>.</p>

<?php 
// SÓ PHP, OK!
echo $livro["titulo"];

// PHP COM HTML (EVITAR):
//echo "<p>$livro["titulo"]</p>"; // erro
//echo "<p>$livro['titulo']</p>"; // erro
//echo "<p>$livro[\"titulo\"]</p>"; // erro

// PHP COM CONCATENAÇÃO, OK! (EVITAR SE POSSÍVEL)
echo "<p>".$livro["titulo"]."</p>"; 

// PHP COM ARRAY ENTRE {}, OK! (EVITAR)
echo "<p>{$livro["titulo"]}</p>"; 
?>
<h2>Analisando a estrutura de arrays
usando print_r() e var_dump()</h2>

<!-- Comandos sem formatação -->
<?=print_r($bandas)?>
<br> <br>
<?=var_dump($bandas)?>

<!-- Tag <pre> formata
e torna mais legível a saída -->
<pre><?=print_r($bandas)?></pre>
<pre><?=var_dump($bandas)?></pre>



</body>
</html>