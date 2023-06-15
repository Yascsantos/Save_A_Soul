<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início| Save a Soul</title>
    <link rel="icon" type="imagem/png" href="index/imgs/Amora.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css" type="text/css"></head>
</head>
<style>
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
   <img src="./imgs/logo.png" >
        <div class="mobile-menu">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
             
            </div>
     <ul class="nav-list">
     <a href="../usuario/perfil/perfil.php"><span class="material-symbols-outlined">account_circle</span></a>
          <li> <a href="../sobre/sobre.php">SOBRE</a></li>
          <li> <a href="#">DOE</a></li>
          <li> <a href="#">ADOTE</a></li>
       </ul>

       </nav>
</header>
           <section class="inicio" id="inicio">
                      <div class="max-width">
                      <div class="inicio-content">
                      </div>
                      </div>
          </section>

         


    <section class="ajude" id="ajude">
  
  <div class="max-width">
                <h2 class="title">Junte-se</h2>
              <div class="carousel owl-carousel ">
                  <div class="card">
                    <div class="box">
                        <img src="./imgs/dog4.jpg" alt="">
                       
                        <button class='submit'> <a href="#"> <p>Doe</p></a></button>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="./imgs/dog5.jpg" alt="">
                        <button> <a href="#"><p>Seja voluntário</p></a></button>
                    </div>
                    </div>
                    <div class="card">
                      <div class="box">
                          <img src="./imgs/dog3.jpg" alt="">
                          <button><a href="#"><p>Adote</p></a></button>
                      </div>
                </div>
             
            
    </div>
  
  </section>


    

        <footer >
                      <ul class="lista_informacoes">
                     
                        <li> <span class="material-symbols-outlined">pin_drop </span>Endereço: Av. Ten. Marques, s/n - Fazendinha, Santana de Parnaíba - SP, 06529-001</li><br>
                        <li><span class="material-symbols-outlined">call</span>Telefone: (11) 96150-4684 </li><br>
                        <li><span class="material-symbols-outlined">mail </span>Email: saveasoul2023@gmail.com</li><br>
                        <a  href="https://br.pinterest.com/daianemagalhaesdecastro/fotos-do-site/"><i  class="fa fa-pinterest fa-stack-1x">Imagens tiradas do Pinterest</i></a>
                      </ul>
                      </div>
          
          
       
</footer>
</body>
</html>
<script src="js/mobile-navbar.js"></script>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="js/script.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">