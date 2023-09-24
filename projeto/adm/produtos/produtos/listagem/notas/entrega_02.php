<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../../petshop/css/petshop.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Compra registrada</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap');

    p{
        font-family: 'league Spartan';
    }
</style>
<body>
<section class='carrinho'>
      <b> <h2 class='title'>Seu pedido foi registrado :)</h2></b>
     
      <div class='max-width'>
<div class='carrinho-content'>

    

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
   echo" <div class='finalizar'>";

   
    echo"<p>Ao lado estão os itens escolhidos. Muito obrigada pela confiança. </p>
    <p>OBS: Caso você volte para o carrinho, sua compra será interrompida.<br>
    <a href= './entrega/armazena.php'><button  class='comprar'>Finalizar compra</button></a>
    <a href= './entrega/back.php'><span class='material-symbols-outlined'>
    shopping_cart
    </span></a> </p>";
    include_once ("../pet/proc.php");
    echo "</div>";
   
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

            echo " <div class='car'>";
            echo "
            
                
                        <img src=".$img_pro." width='100px' height='100px'>
                   
                    <div class='text'>

                 
                    <h2>".$prod." </h2>
                 
                        ".$cor."
                
                        ".$tam."
                   

              
                        R$".$preco."
                

                  
                        ".$qtd."
                        <button class='valor'> 
                        R$".$valor."</b></button></div>
            


                    </div>
            ";  

        }

    }
    echo "     
    </div> 
    </div> 
    </section>
";
   



?>

</body>
</html>
