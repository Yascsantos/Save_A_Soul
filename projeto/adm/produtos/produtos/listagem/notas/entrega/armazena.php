
<?php
    include_once("../../../../../../conexaoBD.php");

    if(!isset($_SESSION))
    {
        session_start();
    }
    $numero = $_SESSION['id_car'];
    $id_user = $_SESSION['id_user']; 


    $sql_code = "SELECT * FROM pedido WHERE id_user = $id_user";
    $code = $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
    
    foreach($code as $dade)
    {
        $id_pro = $dade['id_pro'];
        $num = $dade['numero'];
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

            $dados = "INSERT INTO armazena (id_user,id_pro,numero, cor, tamanho, qtd, valor) 
            VALUES ('$id_user','$id_pro','$num','$cor', '$tam', '$qtd', '$valor')";
            $dados_save = $conexao->query($dados) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
        }

    }
    include_once("drop.php");


?>