<?php
    include_once("../../../conexaoBD.php");

    $sql= "SELECT * FROM user";
    $instrucao = mysqli_query($conexao,$sql);

    foreach ($instrucao as $exibe) 
    {
        echo "
        <table> 
            <tr>
                <th align='center'>ID</th>
                <th> </th>
                <th align='center'>Usuário</th>
                <th></th>
                <th align='center'>Nome</th>
                <th></th>
                <th align='center'>E-mail</th>
                <th></th>
                <th align='center'>Telefone</th>
                <th></th>
            </tr>";
    
        foreach ($instrucao as $exibe) 
        {
            echo "
            <tr>
                <td align='center'>".$exibe['id_user']."</td>
                <td></td>
                <td align='center'>".$exibe['usuario']."</td>
                <td></td>
                <td align='center'>".$exibe['nome']."</td>
                <td></td>
                <td align='center'>".$exibe['email']."</td>
                <td></td>
                <td align='center'>".$exibe['telefone']."</td>
                <td></td>
                <td align='center'><a href='../descricao/page.php?&codigo=".$exibe['id_user']."'>Considerações</a></td>
                <td></td>
    
            </tr>
            ";
        }
        echo"</table>";    
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    
</body>
</html>