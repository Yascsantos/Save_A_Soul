<?php
    include_once("../../../../conexaoBD.php");
    $sql= "SELECT * FROM categoria";
    $instrucao = mysqli_query($conexao,$sql);


    echo "
    <table> 
        <tr>
            <th></th>
            <th></th>
            <th> </th>
            <th align='center'>Código</th>
            <th> </th>
            <th align='center'>Nome da categoria</th>
            <th></th>
            <th></th>
            <th></th>

        </tr>";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <tr>
            <td align='center'><a href='../update/alter.php?&codigo=".$exibe['id_cat']."'>Alterar </a></td>
            <td></td>
            <td></td>
            <td align='center'>".$exibe['id_cat']."</td>
            <td></td>
            <td align='center'>".$exibe['nome']."</td>
            <td></td>
            <td align='center'><a href='../delete/del.php?&codigo=".$exibe['id_cat']."'>Delete</a></td> 
            <td></td>
        </tr>
        ";
    }
    echo"</table>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de categorias</title>
</head>
<body>

</body>
</html>