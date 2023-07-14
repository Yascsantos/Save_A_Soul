<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    $cod = $_SESSION['id_u'];
    

    include_once("../../../conexaoBD.php");

    $sql= "SELECT * FROM descricao_ado WHERE id_user = $cod";
    $instrucao = mysqli_query($conexao,$sql);

    foreach ($instrucao as $exibe) 
    {
        echo "
        <table> 
            <tr>
                <th align='center'>Usuário</th>
                <th></th>
                <th align='center'>texto</th>
                <th></th>
            </tr>";
    
        foreach ($instrucao as $exibe) 
        {
            echo "
            <tr>
                <td align='center'>".$exibe['id_user']."</td>
                <td></td>
                <td align='center'>".$exibe['texto']."</td>
                <td></td>
            </tr>
            ";
        }
        echo"</table>";

    }
?>

