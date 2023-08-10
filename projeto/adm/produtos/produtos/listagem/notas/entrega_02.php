<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra registrada</title>
</head>
<body>
    <h1>Seu pedido foi registrado :)</h1>
    <p>Abaixo estão os itens escolhidos. Muito obrigada pela confiança. </p>
    <p>OBS: Caso você volte para o carrinho, sua compra será interrompida.</p>
    <a href= "./entrega/armazena.php">Finalizar compra</a>
    <a href= "./entrega/back.php">Voltar ao carrinho</a> <br><br>

</body>
</html>

<?php
    include_once("../../../../../conexaoBD.php");

    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_user = $_SESSION['id_user']; 
    $numero = $_SESSION['id_car'];

    $sql_code = "SELECT * FROM pedido WHERE numero = $numero";
    $code = $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
    
    echo "<table>";
    foreach($code as $dade)
    {
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
    include_once ("../pet/proc.php");



?>