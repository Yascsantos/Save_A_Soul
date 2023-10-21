<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Petshop| Save a Soul</title>
  <link rel="icon" type="imagem/png" href="../index/imgs/logo1.png" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="../../../../../petshop/css/petshop.css" type="text/css">
</head>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

  * {
    font-family: 'Poppins';
  }
  #car{
    width: 100%;
  height: 400px;
            border: none;
            margin-top: 10px;

  }
  .carrinho {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
    justify-content: center;
    align-items: center;
}

.content-carrinho  {
  background-color:#667948;
    border-radius: 5px;
    width:50%;
    height:500px;
    margin-left:53%;
    padding: 10px;
    text-align: center;
    color:#fff;
    font-family: 'Poppins';
    position: relative;
}

.fechar {
    position: absolute;
    top: 10px;
    left: 20px;
    font-size: 24px;
    cursor: pointer;
}
.comprar{
    width: 30%;
    height: 30px;
    background:   #474845;
    color: white;
    font-size: 13px;
 

  }
  button {
    width: 30%;
    height: 30px;
    background: #adb5a0;
    outline: none;
    border: none;
    margin-top: 15px;
    color: white;
    margin-left: 20%;
    font-size: 16px;
  }




  .popup label {
    display: block;
    margin-bottom: 10px;
  }



  .popup {
    width: 300px;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    position: absolute;
    top: 40%;
    left: 20%;
    transform: translate(-50%, -50%);
    text-align: center;
  }

  .popup iframe {
    border: none;
  }
</style>

<body>
  <header id="menu">
    <nav>
      <img src="../../../../../index/imgs/logo.png">
      
      <ul class="nav-list">
        <li> <a href="../../../../../index/index.php">INICIO</a></li>
        <li> <a href="../../../../../index/ajude.php">AJUDAR</a></li>
        <li> <a href="../pet/grade_nova.php">VOLTAR</a></li>
        <li><a id="open-cart">CARRINHO</a> </li>
          <div id="cart-modal" class="carrinho">

<div class="content-carrinho">
<span class="fechar" id="close-cart">&times;</span>
    Carrinho de Compras
 
    <iframe src="../pet/exibe_car.php" id="car"></iframe>
  

  <a href='../pet/grade_nova.php'>Continuar comprando</a>    <button  class='comprar'>    <a href='../../../../../petshop/obtencao/forma.php'><b>Finalizar compra</b></button></a>
   </div>
</div>

<script src="../pet/script.js"></script>
        <li><a href="../../../../../usuario/perfil/perfil.php"><span class="material-symbols-outlined">account_circle</span></a></li>
        <br>
      </ul>

    </nav>
  </header>
  <section class="filtro">
 
  <a href='#produto' class='but'></a>
                    
                     </section>
  
 
                     <section  id="produto">
                     <h2 class='title'>Tudo para seu pet</h2>
                     <div class="filtro-content">
   <div class='filt'>
   <span class='material-symbols-outlined' onclick='openPopup()'>
 tune
 </span></div>
 <div id='popupContainer' style='display: none;'>
                       <div  class='popup' >
                       <br><br>
                       <?php include_once("../filtro/filtro.php"); ?>
                       </div>
                   </div>
               
                   <script>
                       function openPopup() {
                           document.getElementById('popupContainer').style.display = 'block';
                       }
               
             
                   </script>
                     <a href='#produto' class='but' ></a><div class='lupa'><?php  include_once("../barra/barra.php"); ?>  </div> 

       
     
            <div class="produto">


          <?php
          //caso o filto seja selecionado

          include_once("../../../../../conexaoBD.php");

          //se o campo for nulo 
          if ($cat == "0") {
            header('location:./pet/grade_nova.php');
          }


          if ($cat != "0") {
            //campo NÃO for nulo
            $sql_query = "SELECT * FROM produto Where id_cat = $cat ";
            $requery = mysqli_query($conexao, $sql_query);
            foreach ($requery as $exibe) {
              echo "
                    <div class='card'>
 
                    <a href='../../../../../petshop/perfil.php?&codigo=" . $exibe['id_pro'] . "'><img src=" . $exibe['img_pro'] . " style='height:250px;  width:250px;'></a><br>
                        
                         <b>   " . $exibe['prod'] . "</b><br> <p> R$" . $exibe['preco'] . "</p><br>
                         <div class='compra'>
                         <a href='../../../../../petshop/perfil.php?&codigo=" . $exibe['id_pro'] . "'> <span class='material-symbols-outlined' >visibility</span></a>
                         <a href='../../../../../petshop/perfil.php?&codigo=" . $exibe['id_pro'] . "'><span class='material-symbols-outlined' id='ver'>
                         shopping_cart
                         </span></a>
                            </div>
                              </div>
                        
                        ";
            }
          } else {
            //se o filtro NÃO for selecionado 
            header('location:./pet/grade_nova.php');
          }


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