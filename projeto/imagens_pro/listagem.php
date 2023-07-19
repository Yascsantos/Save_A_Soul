<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagens do produto</title>
</head>
<body>
    <h1> Listagem das imagem do produto </h1>
    <a href='../adm/produtos/produtos/listagem/pro.php'>Voltar</a><br>
    <br> <br>

<?php
    //id
    if(!isset($_SESSION))
    {
        session_start();
    }
    $_SESSION['id_ip'] = $_GET['codigo']; //id_pro
    $cod = $_SESSION['id_ip'];

    include_once("../conexaoBD.php");
    $sql= "SELECT * FROM imgpro WHERE id_pro = $cod";
    $instrucao = mysqli_query($conexao,$sql);

    echo "<h3>Imagens do produto ".$cod.".</h3>";
    echo "
    <table> 
        <tr>
 
            <th align='center'>Código do produto</th>
            <th> </th>
            <th align='center'>Imagem</th>
            <th></th>

        </tr>";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <tr>
            <td align='center'>".$exibe['id_pro']."</td>
            <td></td>
            <td align='center'><img src=".$exibe['img']."  width='100px' height='100px'></td>
            <td></td>
        </tr>
        ";
    }
    echo"</table>";


?>

</body>
</html>
