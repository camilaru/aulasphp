<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 4 PHP</title>
</head>
<body>
    <h1>Exercício 4 PHP</h1>
    <hr>

    <form autocomplete="off" action="exercicio04-dados.php" method="post">
        <p>
            <label for="nome">Nome do Produto:</label>
            <input  type="text" name="nomedoproduto" id="nomedoproduto">
        </p>
        
		<p>
            <label for="preco">Preço:</label>
            <input  type="preco" name="preco" id="preco">
        </p>

        

        <p>
            <label for="fabricante">Fabricante:</label>
            <select name="fabricante" id="fabricante">
                <option value=""></option>
                <option>Dell</option>
                <option>Apple</option>
                <option>Asus</option>
                <option>LG</option>
            </select>
        </p>

        <p>
            <label for="Descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao" cols="30" rows="6"></textarea>
        </p>

        <button type="submit" name="enviar">Enviar dados</button>
    </form>

</body>
</html>