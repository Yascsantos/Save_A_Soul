<?php 
  include_once("protect.php")
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho| Save a Soul</title>
    <link rel="icon" type="imagem/png" href="../../index/imgs/logo1.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <linl rel='stylesheet' href="https://eng.m.fontke.com/family/1742293/">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../../../../../petshop/css/petshop.css" type="text/css"></head>
</head>
   <style>
    body{
      background-color: #ADB5A0;
    }
    .comprar{
  align-items: center;
  width: 50%;
  height:50px;
  background: #080808;
  margin-right: 20%;
  color: white;
  font-size: 20px;
}
   </style>

<body>
       <section class='carrinho'>
     


<?php 
  //processamento
    include_once("../../../../../conexaoBD.php");
   
    include_once('proc.php'); 

    echo"<div class='carrinho-content'>";
    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_user = $_SESSION['id_user']; 
    //echo "TESTE: ".$id_user."<br>";

    $query= "SELECT * FROM carrinho WHERE id_user = $id_user";     
    $requery= $conexao->query($query) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

    foreach($requery as $dados)
    {
        $id_u = $dados['id_user'];
    }
    
      if(empty($id_u))
      {
        echo "
    <style>
    .car img{
      height:300px;
      width:400px;
    }

   
    
    </style>
    
  
      <div class='car'>
        <h2 class='text'>Seu carrinho está vazio <br> <a href='grade_nova.php'<br>
        <img src='car.jpg'> 
     </div>
        
        ";
      }

      else 
      {
        
    
     

          $sql_code = "SELECT * FROM carrinho WHERE id_user = $id_user";
          $code = $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
      
          foreach($code as $dade)
          {
              $id_car = $dade['id_car'];
              $id_u = $dade['id_user'];
              $id_pro = $dade['id_pro'];
              $cor = $dade['cor'];
              $tam = $dade['tamanho'];
              $qtd = $dade['qtd'];
      
              $sql= "SELECT * FROM produto where id_pro = $id_pro";     
              $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
      
              foreach($instrucao as $dados)
              {
                  $prod = $dados['prod'];
                  $preco = $dados['preco'];
                  $img_pro = $dados['img_pro'];
            echo"
                  <div class='car'>
                  <img src=".$img_pro." width='100px' height='100px'>
                  <div class='text'>
                      ".$prod."     ".$cor." ".$tam."<br><br>
                      <b>R$".$preco."</b>
                      <b> Qtd: ".$qtd." </b>
                
                  <button class='valor'>  <b>R$ ".$valor."</b></button>
                    <br><br>
                      <a href='../../../../../petshop/form.php?&carrinho=".$id_car."&pro=".$id_pro."'><span class='material-symbols-outlined'>
                      add
                      </span></a>
                      <a href='../../../../../petshop/carrinho/drop.php?&codigo=".$id_car."'><span class='material-symbols-outlined'>
                      delete
                      </span></a></div>";
                     echo" </div>";   
                
              }
      
          }
      }


?>      
      
        </div> 
        </section>


</body>
</html>


