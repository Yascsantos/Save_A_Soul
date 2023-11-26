<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../css/style.css">
    <title>Listagem de tamanhos</title>
</head>

<body>

    <main>
<div class="encontro">
        
<a href="../infos/pro.php"> Voltar </a> <br>
    <a href="form.php"> Cadastrar + tamanhos </a>
    <h2> Listagem de tamanhos dos produtos </h2>
   


<?php
    	if(!isset($_SESSION))
        {
            session_start();
        }
        $code = $_SESSION['code'];

    include_once("../../../../../conexaoBD.php");
    $sql= "SELECT * FROM tamanhos where id_pro = $code";
    $instrucao = mysqli_query($conexao,$sql);

    echo "
    <table> 
        <tr>
            <th></th>
            <th></th>
            <th> </th>
            <th align='center'>Produto</th>
            <th> </th>
            <th align='center'>Tamanhos</th>
            <th></th>
            <th></th>
            <th></th>

        </tr>";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <tr>
            <td align='center'><a href='alter.php?&codigo=".$exibe['id_tam']."'>Alterar </a></td>
            <td></td>
            <td></td>
            <td align='center'>".$exibe['id_pro']."</td>
            <td></td>
            <td align='center'>".$exibe['tamanho']."</td>
            <td></td>
            <td align='center'><a href='drop.php?&codigo=".$exibe['id_tam']."'>Delete</a></td> 
            <td></td>
        </tr>
        ";
    }
    echo"</table>";
?>  

</div>
</main>
</body>
</html>