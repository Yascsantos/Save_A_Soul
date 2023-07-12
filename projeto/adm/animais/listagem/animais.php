<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem dos produtos</title>
</head>
<body>
    <h1> Listagem dos animais </h1>
    <a href="../cadastro/form.html"> Cadastrar mais animais </a><br>
    <a href="../pg05.html"> Voltar</a> <br>
    <br> <br>

<?php
    include_once("../../../conexaoBD.php");
    $sql= "SELECT * FROM animal";     
    $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));


    echo "
    <table> 
        <tr>
            <th align='center'></th>
            <th></th>
            <th></th>
            <th></th>

            <th align='center'>Imagem padrão</th>
            <th> </th>
            <th align='center'>Código</th>
            <th> </th>
            <th align='center'>Nome</th>
            <th></th>
            <th align='center'>Raça</th>
            <th></th>
            <th align='center'>Porte</th>
            <th></th>
            <th align='center'>Sexo</th>
            <th></th>
            <th></th>

            <th></th>
            <th></th>
            <th></th>
            <th></th>


        </tr>";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <tr>
            <td align='center'><a href='../../../../imagens_pro/pg03.php?&id=".$exibe['id_ani']."'> + Imagem(s)</a></td> 
            <td></td>            
            <td></td>
            <td></td>

            <td align='center'><a href='../cadastro/pg06.php?&codigo=".$exibe['id_ani']."'><img src=".$exibe['img_ani']." alt='Imagem padrão' width='100px' height='100px'></a></td>
            <td></td>
            <td align='center'>".$exibe['id_ani']."</td>
            <td></td>
            <td align='center'>".$exibe['nome_ani']."</td>
            <td></td>
            <td align='center'>".$exibe['raca']."</td>
            <td></td>
            <td align='center'>".$exibe['porte']."</td>
            <td></td>
            <td align='center'>".$exibe['sexo']."</td>
            <td></td>
            <td></td>

            <td align='center'><a href='../delete/delete.php?&codigo=".$exibe['id_ani']."'>Apagar registo</a></td> 
            <td></td>
            <td></td>
            <td align='center'><a href='../update/alter.php?&codigo=".$exibe['id_ani']."'>Alterar registro </a></td>

        </tr>
        ";
    }

    echo"</table>";



?>

</body>
</html>
