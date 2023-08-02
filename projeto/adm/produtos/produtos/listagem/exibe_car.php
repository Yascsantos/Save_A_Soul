<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compras</title>
</head>
<body>
    <h2>CARRINHO DE COMPRAS</h2>
    <a href="../../../../usuario/perfil/perfil.php">Voltar ao perfil</a>
    <br><br>
</body>
</html>

<?php
    include_once("../../../../conexaoBD.php");

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
        <td align='center'></td>
        <td align='center'>Produto</td>
        <td align='center'>Preço</td>
        <td align='center'>Cor</td>
        <td align='center'>Tamanho</td>
        <td align='center'>Quantidade</td>
        <td align='center'>Valor final</td>
        <td align='center'></td>
        <td align='center'></td>
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
                <td align='center'><img src=".$img_pro." width='100px' height='100px'></td>
                <td align='center'>".$prod."</td>
                <td align='center'>".$preco."</td>
                <td align='center'>".$cor."</td>
                <td align='center'>".$tam."</td>
                <td align='center'>".$qtd."</td>
                <td align='center'>".$valor."</td>
                <td><a href='../../../../petshop/form.php?&carrinho=".$id_car."&pro=".$id_pro."'>Alterar pedido</a></td>
                <td><a href='../../../../petshop/carrinho/drop.php?&codigo=".$id_car."'>Deletar pedido</a></td>
            </tr>
    
            ";
    

        }

    }
 
    echo "</table>";
    echo "<br><br>";
    //exibição da soma geral do pedido
    echo "<b>";
    include_once("proc.php");
    echo "</b>";

    echo "<br><br>";
    echo "<a href='../../../../petshop/obtencao/forma.html' class='submit'><button type='button'>Finalizar compra</button></a>";




?>

