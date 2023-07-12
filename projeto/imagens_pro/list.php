<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>+ Imagens</title>
</head>
<body>
    <h1> Listagem das categorias dos produtos </h1>
    <a href="cad.php"> Cadastrar imagens </a><br>
    <a href='../adm/produtos/produtos/listagem/pro.php'>Listar produtos</a><br>
    <br> <br>

<?php
    //id
    if(!isset($_SESSION))
    {
        session_start();
    }
    $cod = $_SESSION['id_ip'];

    include_once("../conexaoBD.php");
    $sql= "SELECT * FROM imgpro WHERE id_pro = $cod";
    $instrucao = mysqli_query($conexao,$sql);

    echo "<h3>Imagens do produto ".$cod.".</h3>";
    echo "
    <table> 
        <tr>
            <th></th>
            <th></th>
            <th> </th>
            <th align='center'>Código do produto</th>
            <th> </th>
            <th align='center'>Imagem</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>

        </tr>";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <tr>
            <td align='center'><a href='alter.php?&codigo=".$exibe['id_imgpro']."'>Alterar </a></td>
            <td></td>
            <td></td>
            <td align='center'>".$exibe['id_pro']."</td>
            <td></td>
            <td align='center'><img src=".$exibe['img']."  width='100px' height='100px'></td>
            <td></td>
            <td></td>
            <td align='center'><a href='delete.php?&codigo=".$exibe['id_imgpro']."'>Delete</a></td> 
            <td></td>
        </tr>
        ";
    }
    echo"</table>";


?>

</body>
</html>
