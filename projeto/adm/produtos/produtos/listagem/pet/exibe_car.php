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
   
</head>
   <style>
      @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap'); 
   .carrinho {
            font-family: 'League Spartan', sans-serif;
            text-align: center;
          background-color: #fff;
          box-shadow:2px 3px 10px 5px rgba(0, 0, 0, 0.2);
        
        }


        .max-width {
            max-width: 600px;
            margin: 0 auto;
        }

      
        .car {
         
            padding: 20px;
            font-family: 'League Spartan';
            margin-top: 20px;
           
        }

    
        .car .detalhes .item a{
          color: #777;
        
          
        }
        .car .detalhes .item a:hover{
          color: #333;
        
        
        
        }


     
        .car .detalhes  {
            margin: 10px 5PX;
            display: flex;
            border-bottom: 1px solid #555c4ce0;
           
        }

        .car .detalhes .item P {
            display: inline-block;
            margin-left:15PX ;
            color: #333;
        }
     
        .car .detalhes .item h2 {
            font-size: 16px;
            margin: 0;
        }

        .car .detalhes .item .valor {
            text-align: right;
            margin-top: 100%;
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
<a href='grade_nova.php'>X</a>

<section class='carrinho'>
      
        <div class='max-width'>
            <div class='carrinho-content'>

<?php 
  //processamento
    include_once("../../../../../conexaoBD.php");
   
    include_once('proc.php'); 

    echo "<div class='car'>";
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
    .recibo img{
    
      height:300px;
      width:400px;
    }

   
    
    </style>
    
  
      <div class='recibo'>
        <h2 class='text'>Seu carrinho está vazio <br> <a href='grade_nova.php'<br>
        <img src='car.png'> 
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
            <div class='detalhes'>
                       
            <div class='Descrição'>
            <img src=".$img_pro." width='100px' height='100px'><br>
            <b>  ".$prod." </b>".$cor." Tam:".$tam."  </div>
                           
            <div class='item'>
            <p >Quantidade:
                ".$qtd."</p>
            </div><BR>
            <div class='item'>
                <p>Preço unitário:R$".$preco." </p><br>
              
                <a href='../../../../../petshop/carrinho/drop.php?&codigo=".$id_car."'><span class='material-symbols-outlined'>
                delete
                </span></a>  <a href='../../../../../petshop/form.php?&carrinho=".$id_car."&pro=".$id_pro."'><span class='material-symbols-outlined'>
                add
                </span></a>
            </div>
            <div class='item'>
                <p class='valor'>Total:R$".$valor."</p>
               
            </div>
        </div>
                
    
                  ";
                    
                
              }
      
          }
      }


?>      
      
        </div> 
        </section>


</body>
</html>


