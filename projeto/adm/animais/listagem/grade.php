<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
</head>
<body>
    <h1>Adote-nos</h1>

<?php
    include_once("../../../conexaoBD.php");
    $sql= "SELECT * FROM animal";
    $instrucao = mysqli_query($conexao,$sql);


    echo "<table>";
    echo " 
        <tr>
            <th>-----------------------------------------<th>
            <th align='center'></th>
            <th> </th>
        </tr> 

        <tr>
            <th align='center'></th>
            <th> </th>
        </tr>


        <tr></tr>
        <tr></tr>
        ";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <tr>
            <td align='center'><a href='../../../exibicao_animais/perfil.php?&codigo=".$exibe['id_ani']."'><img src=".$exibe['img_ani']." alt='Imagem padrão' width='100px' height='100px'></a></td>
            <td></td>
        </tr>

        <tr>
            <td align='center'><a href='../../../exibicao_animais/perfil.php?&codigo=".$exibe['id_ani']."'>".$exibe['nome_ani']."</td>
            <td></td>
        </tr>


        <tr></tr><tr></tr>
        <tr>
            <td>--------------------------------<td>
        </tr>
        ";

    }
    echo"</table>";



?>

</body>
</html>
