<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de cores</title>
</head>
<body>
    <h1> Listagem de cores dos produtos </h1>
    <a href="../pro.php"> Voltar </a> <br>
    <a href="form.php"> Cadastrar + cores </a>
    <br> <br>

<?php
    	if(!isset($_SESSION))
        {
            session_start();
        }
        $code = $_SESSION['code'];

    include_once("../../../../../conexaoBD.php");
    $sql= "SELECT * FROM cores where id_pro = $code ";
    $instrucao = mysqli_query($conexao,$sql);

    echo "
    <table> 
        <tr>
            <th></th>
            <th></th>
            <th> </th>
            <th align='center'>Produto</th>
            <th> </th>
            <th align='center'>Cores</th>
            <th></th>
            <th></th>
            <th></th>

        </tr>";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <tr>
            <td align='center'><a href='alter.php?&codigo=".$exibe['id_cor']."'>Alterar </a></td>
            <td></td>
            <td></td>
            <td align='center'>".$exibe['id_pro']."</td>
            <td></td>
            <td align='center'>".$exibe['cor']."</td>
            <td></td>
            <td align='center'><a href='drop.php?&codigo=".$exibe['id_cor']."'>Delete</a></td> 
            <td></td>
        </tr>
        ";
    }
    echo"</table>";
?>