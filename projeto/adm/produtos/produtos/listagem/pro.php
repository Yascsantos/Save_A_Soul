<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem dos produtos</title>
</head>
<body>
    <h1> Listagem dos produtos </h1>
    <a href="../pg02.html"> Voltar </a> <br>
    <a href="../cadastro/form.php"> Cadastrar </a>
    <br> <br>

<?php
    include_once("../../../../conexaoBD.php");
    $sql= "SELECT  id_pro AS cod, nome_cat AS categoria, prod AS produto, preco, qtd AS quantidade, tamanho, cor, modelo, outros 
                FROM produto p 
	            INNER JOIN categoria cat ON p.id_cat = cat.id_cat";

    $instrucao = mysqli_query($conexao,$sql);


    echo "
    <table> 
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th align='center'>Código</th>
            <th> </th>
            <th align='center'>Categoria</th>
            <th></th>
            <th align='center'>Produto</th>
            <th></th>
            <th align='center'>Preço</th>
            <th></th>
            <th align='center'>Quantidade</th>
            <th></th>
            <th align='center'>Tamanho</th>
            <th></th>
            <th align='center'>Cor</th>
            <th></th>
            <th align='center'>Modelo</th>
            <th></th>
            <th align='center'>Outros</th>
            <th></th>
            <th></th>
            <th align='center'></th>
            <th></th>

            <th></th>
            <th></th>

        </tr>";

    foreach ($instrucao as $exibe) 

    {
        echo "
        <tr>
            <td align='center'><a href='../update/alter.php?&codigo=".$exibe['cod']."'>Alterar </a></td>
            <td></td>
            <td></td>
            <td align='center'>".$exibe['cod']."</td>
            <td></td>
            <td align='center'>".$exibe['categoria']."</td>
            <td></td>
            <td align='center'>".$exibe['produto']."</td>
            <td></td>
            <td align='center'>".$exibe['preco']."</td>
            <td></td>
            <td align='center'>".$exibe['quantidade']."</td>
            <td></td>
            <td align='center'>".$exibe['tamanho']."</td>
            <td></td>
            <td align='center'>".$exibe['cor']."</td>
            <td></td>
            <td align='center'>".$exibe['modelo']."</td>
            <td></td>
            <td align='center'>".$exibe['outros']."</td>
            <td></td>
            <td></td>
            <td align='center'><a href='../../imagens/pg03.php?&id=".$exibe['cod']."'>Imagem(s)</a></td> 
            <td></td>

            <td align='center'><a href='../delete/del.php?&codigo=".$exibe['cod']."'>Delete</a></td> 
            <td></td>
        </tr>
        ";
    }

    echo"</table>";


?>

</body>
</html>
