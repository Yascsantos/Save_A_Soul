<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho| Save a Soul</title>
    <link rel="icon" type="imagem/png" href="../index/imgs/logo1.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../../../../petshop/css/petshop.css" type="text/css"></head>
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
   <img src="../../../../index/imgs/logo.png" >
        <div class="mobile-menu">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
             
            </div>
     <ul class="nav-list">
          <li> <a href="../../../../index/index.php">INICIO</a></li>
          <li> <a href="#">DOAR</a></li>
          <li> <a href="../../../animais/listagem/grade.php">ADOTE</a></li>
          <li> <a href="#">SEJA VOLUNTÁRIO</a></li>
          <li><a href="../../../../usuario/perfil/perfil.php">CONTINUAR COMPRANDO</a></li>
          <li><a href="../../../../usuario/perfil/perfil.php"><span class="material-symbols-outlined">account_circle</span></a></li>
          <br>
       </ul>

       </nav>
       </header>
<section class="filtro">
  <div class="max-width">

  <div class="sobre-content">
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
                <td><a href='../../../../petshop/carrinho/form.php?&carrinho=".$id_car."&pro=".$id_pro."'><span class='material-symbols-outlined'>
                add
                </span></a></td>
                <td><a href='../../../../petshop/carrinho/drop.php?&codigo=".$id_car."'><span class='material-symbols-outlined'>
                delete
                </span></a></td>
=======
                <td><a href='../../../../petshop/form.php?&carrinho=".$id_car."&pro=".$id_pro."'>Alterar pedido</a></td>
                <td><a href='../../../../petshop/carrinho/drop.php?&codigo=".$id_car."'>Deletar pedido</a></td>
>>>>>>> 55f451de011605edcb303421e9ca0b68fa1cfd1b
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
