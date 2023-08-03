<?php
/*
    Fazer a soma geral de todos os valores do carrinho do usuário que está com o id dentro da sessão que está
    iniciada
*/
    include_once("../../../../conexaoBD.php");
    if(!isset($_SESSION))
    {
        session_start();
    }
    
    $id_user = $_SESSION['id_user']; 

    $sql="SELECT valor FROM carrinho WHERE id_user= $id_user";
    $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

    $teste = 0;

    foreach($instrucao as $dados)
    {
        $valor = $dados['valor'];
        $teste += $valor;
    }

    echo "<p class='title'><br>Valor total do pedido:<br> R$".$teste.",00</p>";




    
?>