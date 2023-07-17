<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem sobre adoção</title>
</head>
<body>
    <h2>Listagem de informações observadas na entrevista para adoção</h2>
</body>
</html>

<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    $cod = $_SESSION['id_u'];
    

    include_once("../../../../conexaoBD.php");

    $sql= "SELECT * FROM descricao_ado WHERE id_user = $cod";
    $instrucao = mysqli_query($conexao,$sql);

    $sql_code= "SELECT nome FROM user WHERE id_user = $cod";
    $pesquisa = mysqli_query($conexao,$sql_code);

    foreach ( $pesquisa as $dados)
    {
        $user = $dados['nome'];
    }
    

    foreach ($instrucao as $exibe) 
    {
        echo "<a href='../listagem.php'>Voltar</a><br><br>";
        echo "
        <table> 
            <tr>
                <th></th>
                <th></th>
                <th align='center'>Usuário</th>
                <th></th>
                <th></th>
                <th align='center'>texto</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>";
    
        foreach ($instrucao as $exibe) 
        {
            echo "
            <tr>
                <td align='center'><a href='alter.php?&codigo=".$exibe['id_descad']."'>Alterar </a></td>
                <td></td>
                <td align='center'>".$user."</td>
                <td></td>
                <td></td>
                <td align='center'>".$exibe['texto']."</td>
                <td></td>
                <td align='center'><a href='drop.php?&codigo=".$exibe['id_descad']."'>Delete</a></td> 
                <td></td>
            </tr>
            ";
        }
        echo"</table>";

    }
?>
