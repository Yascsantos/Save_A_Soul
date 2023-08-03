<?php
    //id
    if(!isset($_SESSION))
    {
        session_start();
    }
    $_SESSION['id_ip'] = $_GET['codigo']; //id_pro
    $cod = $_SESSION['id_ip'];

    include_once("../conexaoBD.php");
    $pesq= "SELECT prod FROM produto WHERE id_pro = $cod";
    $pesquisa = mysqli_query($conexao,$pesq);
    foreach($pesquisa as $das)
    {
        $prod = $das['prod'];
    }

    echo "
    <!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>".$prod."</title>
    </head>
    <body>
        <br>
        <h3><a href='../adm/produtos/produtos/listagem/geral/pro.php'>Voltar</a></h3><br>
    ";
    $sql= "SELECT * FROM imgpro WHERE id_pro = $cod";
    $instrucao = mysqli_query($conexao,$sql);
    echo "
    <table> 
        <tr>
            <th align='center'></th>
            <th></th>

        </tr>";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <tr>
            <td align='center'><img src=".$exibe['img']."  width='100px' height='100px'></td>
            <td></td>
        </tr>
        ";
    }
    echo"<br></table>";


?>

</body>
</html>
