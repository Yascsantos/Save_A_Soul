<?php
    include_once("../../conexaoBD.php");

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
        <tr>
            <td align='center'><img src=".$exibe['img']."  width='100px' height='100px'></td>
            <td></td>
        </tr>
        ";
    }
    echo"</table>";



    //PRODUTOS
    $sql_code= "SELECT * FROM produto WHERE id_pro = $id";
    $pesquisa = mysqli_query($conexao,$sql_code);
    
    echo "<table>";
    foreach ($pesquisa as $exibe) 
    {
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
                <td align='center'>Tamanho: </td>
                <td align='center'>".$exibe['tamanho']."</td>
                <td></td>
            </tr> 

            <tr>
                <td align='center'>Cor: </td>
                <td align='center'>".$exibe['cor']."</td>
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

            <tr></tr><tr></tr>
        ";
    }
    echo "</table>";

    

?>