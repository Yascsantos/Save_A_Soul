<?php
    include_once("../../../../conexaoBD.php");

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

            echo "
            <div class='car'>
            
          
        <img src=".$img_pro." width='100px' height='100px'>
        <div class='text'>
              ".$prod."     ".$cor." ".$tam."<br><br>
              <b> R$".$preco."</b>
             Qtd: ".$qtd."
        <button class='valor'>  <b>R$ ".$valor."</b></button>
             <br><br>
                <a href='../../../../petshop/form.php?&carrinho=".$id_car."&pro=".$id_pro."'><span class='material-symbols-outlined'>
                add
                </span></a>
                <a href='../../../../petshop/carrinho/drop.php?&codigo=".$id_car."'><span class='material-symbols-outlined'>
                delete
                </span></a></div>
                </div> 
            ";
  

        }

    }
?>