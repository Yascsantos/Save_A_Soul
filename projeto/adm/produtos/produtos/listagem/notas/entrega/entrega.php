
<?php
    include_once("../../../../../../conexaoBD.php");

    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_user = $_SESSION['id_user']; 

    $sql_code = "SELECT * FROM carrinho WHERE id_user = $id_user";
    $code = $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
    
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

            $dados = "INSERT INTO pedido (id_user,id_pro,cor, tamanho, qtd, valor) 
            VALUES ('$id_user','$id_pro','$cor', '$tam', '$qtd', '$valor')";
            $dados_save = $conexao->query($dados) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
                
        }

    }
        $up = "UPDATE pedido set numero = $id_car WHERE id_user = $id_user";
        $update = $conexao->query($up) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
        $_SESSION['id_car'] = $id_car; 

        if (!$update) 
        {
            die(' Query Inválida: ' . mysqli_error($conexao));
    
        } 
        else 
        {
            mysqli_close($conexao);
            header ('location: ../entrega_02.php');
            exit;
    
        }
    

?>