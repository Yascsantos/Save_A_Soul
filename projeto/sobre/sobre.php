
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="icon" type="imagem/png" href="imagens/icon.png" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre|Save a Soul</title>
  
    <link rel="icon" type="imagem/png" href="index/imgs/logo.png" />
 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sobre.css">
</head>
<style>
body{
  background-color: #DEE8CD;
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
   <img src="./imgs/logo.png" >
        <div class="mobile-menu">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
             
            </div>
     <ul class="nav-list">
          <li> <a href="../index/index.php">INICIO</a></li>
          <li> <a href="#">DOE</a></li>
          <li> <a href="#">ADOTE</a></li>
          <li> <a href="#">PETSHOP</a></li>
          <li><a href="../usuario/perfil/perfil.php"><span class="material-symbols-outlined">account_circle</span></a></li>
          <br>
       </ul>

       </nav>
</header>
    <!-- inicio-->
    <section class="inicio" id="inicio">
        <div class="max-width">
            <div class="inicio-content">
             
          
               

            </div>
        </div>
    </section>
    <!--sessão sobre-->
    <section class="comeco" id="inicio">
        <div class="max-width">
        <h2>Como começou</h2><br>
            <div class="comeco-content">
            <br><br>
        <p>
        Em junho de 2022 nascia a nossa ONG, ainda sem muita ideia de onde chegaria, <br>nem de quantos animais teria a oportunidade de salvar, <br>apenas com um – e mais forte – ideal: o de lutar incansavelmente pelos que pouco podiam fazer para mudar seus tristes destinos de abandono, maus tratos e crueldade...
               
</p>
            </div>
        </div>
    </section>
    <section class="sobre" id="sobre">
    
        <div class="max-width">
           
            </div>
        </div>
    </section>

    
     <!--sessão equipe-->
     <section class="equipe" id="equipe">
        <div class="max-width">
         <div class="carousel owl-carousel ">
               <div class="card">
                   <div class="box">
                       <img src="imgs/img-1.jpg" alt="">
                       <div class="text">Yasmin</div>
                       <p>Responsavel pelo Backend (Parte de conexão e programação do site).</p>
                   </div>
               </div>
                <div class="card">
                    <div class="box">
                        <img src="imgs/img-2.jpg" alt="">
                        <div class="text">Winicius</div>
                        <p>Responsavel pelo TCC-escrito.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="imgs/img-3.jpeg" alt="">
                        <div class="text">Daiane</div>
                        <p>Responsavel pelo Frontend (Estilização do site).</p>
                    </div>
                </div>
        </div>

</section>

    <!--sessão  footer-->
    <footer>
        <span>Criado <a href="#">Para</a> | Fins Pedagógicos</span>
    </footer>
  
</body>
</html>
<script src="js/mobile-navbar.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/sobre.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
