<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=c">
    <title>Cadastro dos Animais</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <a href="../pg02.html">Voltar</a> <br>
    <!--<a href="../listagem/list.php">Listagem</a>-->
    <br> <br>
    <form action="form.php" method="post">
        
    <label>Categoria do produto: </label> <br>
    <?= include ("../listagem/cat.php"); ?> 
    <br>  
        <label>Produto: </label> <br>
        <input type="text" placeholder="Produto" name="prod">
        <br>
        <label>Preço: </label> <br>
        <input type="number" placeholder="Preço" name="preco">
        <br>
        <label>Quantidade: </label> <br>
        <input type="number" placeholder="Quantidade" name="qtd">
        <br>
        <label>Tamanho: </label> <br>
        <input type="text" placeholder="Tamanho" name="tam">
        <br>
        <label>Cor: </label> <br>
        <input type="text" placeholder="Cor" name="cor">
        <br>
        <label>Modelo: </label> <br>
        <input type="text" placeholder="Modelo" name="mod">
        <br>
        <label>Outros: </label> <br>
        <input type="text" placeholder="Outras informações" name="out">
        <br>

        <input type="submit" name="cadastrar" value="Cadastrar produto">
    </form>


</body>
</html>