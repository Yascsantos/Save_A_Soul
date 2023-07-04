<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de categorias</title>
</head>
<body>
    <h1> Listagem dos produtos </h1>
    <a href="../pg02.html"> Voltar </a> <br>
    <a href="../cadastro/form.php"> Cadastrar </a>
    <br> <br>

<?php
    include_once("../../../../conexaoBD.php");
    $sql= "SELECT  id_pro AS cod, nome_cat AS categoria, prod AS produto, preco AS preço, qtd AS quantidade, tamanho, cor, modelo, outros 
                FROM produto p 
	            INNER JOIN categoria cat ON p.id_cat = cat.id_cat";

    $array = mysqli_query($conexao,$sql);
 
    echo "Testando Array em sql";
    foreach ($array as $valor) 

    {
        echo $valor;
        echo "<br>";

    }

    echo "TESTANDO ARRAY CRIADO <br>";
    $arr = array(1, 2, 3, 4);
    foreach ($arr as $valor) 
    {
        $valor = $valor * 2;
        echo $valor;
        echo"<br>";
    }

?>

</body>
</html>
