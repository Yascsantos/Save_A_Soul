<?php
    include_once("../../../../../conexaoBD.php");

    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_user = $_SESSION['id_user']; 

    $sql_code = "SELECT * FROM carrinho WHERE id_user = $id_user";
    $code = $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
    
    echo "<table>";
    echo "
        <tr>
            <td align='center'> 
                FOTO 
            </td>
            <td></td>

            <td align='center'>
                PRODUTO 
            </td>

            <td align='center'>
                COR
            </td>

            <td align='center'>
                TAMANHO
            </td>

            <td align='center'>
                PREÇO UNITÁRIO
            </td>

            <td align='center'>
                QUANTIDADE 
            </td>

            <td align='center'>
                VALOR 
            </td>
    </tr>
    ";

    foreach($code as $dade)
    {
        $id_car = $dade['id_car'];
        $id_pro = $dade['id_pro'];
        $cor = $dade['cor'];
        $tam = $dade['tamanho'];
        $qtd = $dade['qtd'];
        $valor = $dade['valor'];

        $sql= "SELECT * FROM produto where id_pro = $id_pro";     
        $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));


        foreach($instrucao as $dados)
        {
            $prod = $dados['prod'];
            $preco = $dados['preco'];
            $img_pro = $dados['img_pro'];


            echo "
                <tr>
                    <td align='center'>
                        <img src=".$img_pro." width='100px' height='100px'>
                    </td>
                    <td></td>

                    <td align='center'>
                        ".$prod." 
                    </td>

                    <td align='center'>
                        ".$cor."
                    </td>

                    <td align='center'>
                        ".$tam."
                    </td>

                    <td align='center'>
                        R$".$preco."
                    </td>

                    <td align='center'>
                        ".$qtd."
                    </td>

                    <td align='center'>
                        R$".$valor."
                    </td>


            </tr>
            ";  

        }

    }
    echo "</table>";

?>