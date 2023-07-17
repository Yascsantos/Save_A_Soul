<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=c">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Cadastro dos produtos</title>
</head>
<body>
<main>
        <div class="caixa">
            <div class='espaco'></div>
              <div class="caixa-dados">
    <h1>Cadastro de Produtos</h1>
    <a href="../listagem/pro.php">Listar produtos</a><br>
    <a href="../pg02.html">Voltar</a> <br>

    <form action="cad.php" method="post">
        <div class='input-dados'>
    <label>Categoria do produto: </label>
    <br>
    <?= include ("../listagem/cat.php"); ?> <br>

        <label>Produto: </label>
        <input type="text" placeholder="Produto" name="prod">
        <div class='input-senha'>
        <label>Preço: </label>
        <input type="number" placeholder="Preço" name="preco">
        </div>
        <div class='input-senha'>
        <label>Quantidade: </label>
        <input type="number" placeholder="Quantidade" name="qtd">
        </div>
        <div class='input-senha'>
        <label>Tamanho: </label>
        <input type="text" placeholder="Tamanho" name="tam">
        </div>
        <div class='input-senha'>
        <label>Cor: </label>
        <input type="text" placeholder="Cor" name="cor">
</div>
        <label>Modelo: </label>
        <input type="text" placeholder="Modelo" name="mod">

        <label>Outros: </label>
        <input type="text" placeholder="Outras informações" name="out">
        <br>

        <button input type="submit" name="cadastrar" value="Cadastrar produto">Cadastrar</button>
        </div>

</div></div>
</main>

    </form>


</body>
</html>