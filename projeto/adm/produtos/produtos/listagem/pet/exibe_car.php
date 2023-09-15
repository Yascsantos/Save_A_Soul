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
  *{
    font-family: 'Poppins';
  }
   body {
      font-family: 'Poppins';
    }
      @keyframes navLinkFade {
      from {
        opacity: 0;
        transform: translateX(50px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }
    
    .mobile-menu.active .line1 {
      transform: rotate(-45deg) translate(-8px, 8px);
    }
    
    .mobile-menu.active .line2 {
      opacity: 0;
    }
    
    .mobile-menu.active .line3 {
      transform: rotate(45deg) translate(-5px, -7px);
    }
   
    @media (max-width: 1300px){
      .navbar .max-width{
          margin-left: 0;
      }
  }
  
  
  
  @media (max-width: 999px) {
    body {
      overflow-x: hidden;
    
    }
    .nav-list {
      position: absolute;
      top: 8vh;
      right: 0;
      width: 50vw;
      height: 92vh;
      background-color:#cbacaad3;
      flex-direction: column;
      align-items: center;
      justify-content: space-around;
      transform: translateX(100%);
      transition: transform 0.3s ease-in;
    }
    .nav-list li {
      margin-left: 0;
      opacity: 0;
    }
    .mobile-menu {
      display: block;
    }
  }
  
  .nav-list.active {
    transform: translateX(0);
  }
  
  @keyframes navLinkFade {
    from {
      opacity: 0;
      transform: translateX(50px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }
  
  .mobile-menu.active .line1 {
    transform: rotate(-45deg) translate(-8px, 8px);
  }
  
  .mobile-menu.active .line2 {
    opacity: 0;
  }
  
  .mobile-menu.active .line3 {
    transform: rotate(45deg) translate(-5px, -7px);
  }


</style>
<body>
<header id="menu">
      <nav>
   <img src="../../../../../index/imgs/logo.png" >
        <div class="mobile-menu">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
             
            </div>
     <ul class="nav-list">
     <li> <a href="../../../../../index/index.php">INICIO</a></li>
          <li> <a href="../../../../../index/ajude.php">AJUDAR</a></li>
          <li> <a href="grade_nova.php">PET SHOP</a></li>
          <li><a href="../../../../../usuario/perfil/perfil.php"><span class="material-symbols-outlined">account_circle</span></a></li>
          <br>
       </ul>

       </nav>
       </header>
       <section class='carrinho'>
      <b> <h2 class='title'>Seu carrinho de Compra</h2></b>
      <div class='max-width'>
<div class='carrinho-content'>
<?php 
  //processamento
    include_once("../../../../../conexaoBD.php");

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
    .finalizar img{
      height:300px;
      width:400px;
    }
.car{
  font-family:'La Lou';
}
   
    
    </style>
    
    <div class='finalizar'>
    <img src='car.jpg'> 
      </div>
      <div class='car'>
        <h2 class='text'>Seu carrinho está vazio <br> <a href='grade_nova.php'><b>comece a comprar</b></a></h2><br>
        
     </div>
        
        ";
      }

      else 
      {
        //finalizar compra
          echo "<div class='finalizar'>";
          include_once("proc.php");
          echo "</b>";
          echo " <li><a href='grade_nova.php'>CONTINUAR COMPRANDO</a></li><br><br>";
          echo "<a href='../../../../../petshop/obtencao/forma.html' ><button  class='comprar'><b>Finalizar compra</b></button></a>";
          echo "
          </div>";

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
          
                  echo "
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
                      </span></a></div>
                      </div>
                  ";
              }
      
          }
      }


?>      
        </div> 
        </div> 
        </section>


</body>
</html>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../../../../petshop/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

