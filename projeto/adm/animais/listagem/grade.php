<?php
      include_once("protect.php");
?>
    <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais| Save a Soul</title>
    <link rel="icon" type="imagem/png" href="../index/imgs/logo1.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../../../petshop/css/petshop.css" type="text/css">
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

  #car{
    width: 100%;
  height: 500px;
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
  background-color: #ADB5A0;
    border-radius: 5px;
    width:40%;
    height:700px;
    margin:auto;
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
</style>
<body>
<header id="menu">
      <nav>
      <img src="../../../petshop/imgs/logo.png" >
        <div class="mobile-menu">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
             
            </div>
     <ul class="nav-list">
          <li> <a href="../../../index.php">INICIO</a></li>
          <li> <a href="../../produtos/produtos/listagem/pet/grade_nova.php">PETSHOP</a></li>
          <li> <a href="../../../index/ajude.php">AJUDAR</a></li>
          <li><a href="../../../usuario/perfil/perfil.php"><span class="material-symbols-outlined">account_circle</span></a></li>
          <br>
       </ul>

       </nav>
</header>
<section id="inicio">
</section>
<section id="sobre">
<h2 class='title'>A espera de um lar...</h2>
            <div class="sobre-content">
<?php
    include_once("../../../conexaoBD.php");
    $sql= "SELECT * FROM animal WHERE status = 'disponivel'";
    $instrucao = mysqli_query($conexao,$sql);


    foreach ($instrucao as $exibe) 
    {
        echo "
        <div class='card'>
<img src=".$exibe['img_ani']." alt='Imagem padrão' width='100px' height='100px'><br>

      <h2>".$exibe['nome_ani']." </h2>

        <a id='?&codigo=".$exibe['id_ani']."'>Adotar</a>
       
       <a href='../../../funcoes/abrigo/lar.php?&codigo=".$exibe['id_ani']."'>Abrigar</a> </div> ";

    }
  


?>
 <div id='doe' class='carrinho'>

<div class='content-carrinho'>
<span class='fechar' id='close-doe'>&times;</span>
    
 
   <?php echo" <iframe src='../../../funcoes/adocao/adotar.php?&codigo=".$exibe['id_ani']."' id='car'></iframe>";?>
    <script>
    const doeModal = document.getElementById('doe');
const openDoeButton = document.getElementById('".$exibe['id_ani']."');
const closeDoeButton = document.getElementById('close-doe');

// Event listener to open the cart modal
openDoeButton.addEventListener('click', () => {
  doeModal.style.display = 'block';
});

// Event listener to close the cart modal
closeDoeButton.addEventListener('click', () => {
    doeModal.style.display = 'none';
});

</script>




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

