<?php
/*
    Fazer a soma geral de todos os valores do carrinho do usuário que está com o id dentro da sessão que está
    iniciada
*/
  
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

    echo"<style>.title{
      
        color: #373D39;
        font-family:  'League Spartan';
        text-align: center;
        font-size: 20px;
        font-weight: 500;
        margin-bottom: 60px;
        padding-bottom: 10px;
        position: relative;
      }
     .title::before{
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 180px;
        height: 3px;
        background: #667948;
        transform: translateX(-50%);
      }
     </style>";
    echo "<br><h2 class='title'>Total: R$".$teste.",00</h2>";




    
?>