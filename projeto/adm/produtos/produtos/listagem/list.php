<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem do produto</title>
</head>
<body>
    <h1>Listagem do produto</h1>
    <a href="pro.php">Voltar</a><br>

</body>
</html>

<?php
    include_once("../../../../conexaoBD.php");

    
    if(!isset($_SESSION))
    {
        session_start();
    }

    $_SESSION['id_p'] = $_GET['codigo']; //id_pro
    $id = $_SESSION['id_p'];

    if($_GET['codigo'] == "" && $_GET['codigo'] == 0)
    {

    }    
    //IMAGENS

        echo "
        <h3><a href='../../../../imagens_pro/listagem.php?&codigo=".$id."'>Listar imgens</a></h3>";

        //PRODUTOS
    $sql_code= "SELECT * FROM produto WHERE id_pro = $id";
    $pesquisa = mysqli_query($conexao,$sql_code);
    
    echo "<label><h3>Descrição do produto</h3></label>";
    echo "<table>";
    foreach ($pesquisa as $exibe) 
    {
        echo"
            <tr>
                <td align='center'>Nome: </td>
                <td align='center'>".$exibe['prod']."</td>
                <td></td>
            </tr>

            <tr>
                <td align='center'>Preço: </td>
                <td align='center'>R$".$exibe['preco']."</td>
                <td></td>
            </tr> 

            <tr>
                <td align='center'>Modelo: </td>
                <td align='center'>".$exibe['modelo']."</td>
                <td></td>
            </tr> 

            
            <tr>
                <td align='center'>Outras informações: </td>
                <td align='center'>".$exibe['outros']."</td>
                <td></td>
            </tr>
            
            <tr>
            
                <td align='center'>
            </tr>

            <tr></tr><tr></tr>
        ";
    }
    echo "</table>";

    echo "<br>";

    //tamanho
    $sql= "SELECT * FROM tamanhos WHERE id_pro = $id";
    $instrucao = mysqli_query($conexao,$sql);

    echo "<label><h3>Tamanhos disponivéis</h3></label>";
    foreach ($instrucao as $exibe) 
    {
        echo "
        <table>
            <tr>
                <td align='center'> - </td>
                <td align='center'>".$exibe['tamanho']."</td>
            </tr>
        </table>
        ";

    }

    //cores
        $code= "SELECT * FROM cores WHERE id_pro = $id";
        $busca = mysqli_query($conexao,$code);

        echo "<br>";
        echo "<label><h3>Cores disponivéis</h3></label>";
        foreach ($busca as $exibe) 
        {
            echo "
            <table>
                <tr>
                    <td> - </td>
                    <td align='center'>".$exibe['cor']."</td>
                </tr>
            </table>
            ";
    
        }


    

?>