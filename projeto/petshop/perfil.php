<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <a href='../adm/produtos/produtos/listagem/pet/grade_nova.php'> Voltar a comprar</a>
</body>
</html>
<?php
    include_once("../conexaoBD.php");
    include("protect.php");


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
    $sql= "SELECT * FROM imgpro WHERE id_pro = $id";
    $instrucao = mysqli_query($conexao,$sql);

    echo "
    <table> 
        <tr>
            <th align='center'></th>
            <th> </th>
        </tr>";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <div>
            <td align='center'><img src=".$exibe['img']." width='300px' height='300px'></td>
            <td></td>
        </div>
        ";
    }
    echo"</table>";



    //PRODUTOS
    $sql_code= "SELECT * FROM produto WHERE id_pro = $id";
    $pesquisa = mysqli_query($conexao,$sql_code);
    
    echo "<table>";
    foreach ($pesquisa as $exibe) 
    {
        ECHO "
        <!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>".$exibe['prod']."</title>
        </head>
        </html>";

        echo"
            <br>
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

    echo "<form action='./carrinho/carrinho.php' method='POST'>";
    //tamanho
    $sql= "SELECT * FROM tamanhos WHERE id_pro = $id";
    $instrucao = mysqli_query($conexao,$sql);

    echo "<label>Tamanhos disponivéis</label><br>";
    foreach ($instrucao as $exibe) 
    {
        echo "  <input type='radio' class='radio' id=".$exibe['tamanho']." name='tamanho' value=".$exibe['tamanho'].">
        <label for=".$exibe['tamanho'].">".$exibe['tamanho']."</label><br>
        ";

    }
     echo "<br>";

    //cores
        $code= "SELECT * FROM cores WHERE id_pro = $id";
        $busca = mysqli_query($conexao,$code);
        
        echo "<label>Cores disponivéis</label><br>";
        foreach ($busca as $exibe) 
        {
            echo "  <input type='radio' class='radio' id=".$exibe['cor']." name='cor' value=".$exibe['cor'].">
            <label for=".$exibe['cor'].">".$exibe['cor']."</label><br>
            ";
    
        }
        echo "<br>";

    echo "
        <label>Quantidade: </label> 
        <input type='number' placeholder='Quantidade' name='qtd'><br>

    ";
    echo "<br><br><input type='submit' name='salvar' value= 'Adicionar ao carrinho'></input>";
    echo "</form>";



?>

