<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio| Save a Soul</title>
    <link rel="icon" type="imagem/png" href="index/imgs/Amora.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.cdnfonts.com/css/lazy-dog" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css" type="text/css"></head>
</head>
<style>
    *{
    color:white;
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
          <li> <a href="ajude.php">AJUDE</a></li>
          <li> <a href="https://goo.gl/maps/E9MvDvJCDCmGBeWX7">ENDEREÇO</a></li>
          <li> <a href="#">CONTATO</a></li>
          <li> <a href="#">SOBRE NÓS</a></li>
          <li><a href="../usuario/perfil/perfil.php"><span class="material-symbols-outlined">account_circle</span></a></li>
          <br>
       </ul>

       </nav>
</header>
<section class="inicio">
        <div class="max-width">

</div>
</section>
          <section class="sobre" id="sobre">
        <div class="max-width">
            <h2 class="title">Save a Soul</h2>
            <div class="sobre-content">
                <div class="column left">
                    <img src="imgs/dog1.jpg" alt="">
                </div>
                <div class="column right">
               <b><p>  A Save a Soul tem como objetivo principal o resgate e a reabilitação de animais que foram abandonados e/ou maltratados, <br>
        com a finalidade de disponibilizá-los para adoção responsável. <br>
        Para isso, todos os animais resgatados são submetidos a uma triagem rigorosa,
        que inclui exames médicos, consulta veterinária para vacinação e castração,  além de avaliação comportamental. <br>
        Após esse processo, eles são encaminhados para lares temporários. <br>
        Vale ressaltar que, para a Save a Soul, a saúde emocional dos animais é tão importante quanto a saúde física, e,
        <br> por isso, a associação também se dedica a proporcionar um ambiente seguro e acolhedor para esses animais,
        <br> visando a sua recuperação integral e bem-estar geral.</p></b>
                    <a href="ajude.php">Saiba mais</a>
                </div>
            </div>
        </div>
    </section>
   

                
                
     
    <section class="comeco">
        <div class="max-width">
            <h1 class="title">Como começou</h1>
            <div class="comeco-content">
                <div class="column left">
                <b> <p> Luna vivia nas ruas de uma cidade movimentada. Ela era uma gatinha adorável, com pelagem preta e olhos brilhantes, <br>
                mas infelizmente, sua vida não era tão bonita quanto sua aparência. <br>
                Luna sofria maus tratos constantes nas mãos de pessoas cruéis e indiferentes.<br>
                 Encontramo-la em um estado caótico, com muito medo e tristeza no olhar. Luna foi nossa primeira resgatada e não merecia tudo o que passou, <br>
                 assim como nenhum animal merece. Infelizmente, não conseguimos salvá-la, mas seus últimos dias foram preenchidos de amor e carinho.<br>
                 Porém sua vida não foi em vão, pois sua história serviu como estopim para a criação da Save a soul.
                </div></b>
                </div>
            </div>
        </div>
    </section>

   


    

        <footer >
                      <ul class="lista_informacoes">
                        <li> <span class="material-symbols-outlined">pin_drop </span>Endereço: Av. Ten. Marques, s/n - Fazendinha, Santana de Parnaíba - SP, 06529-001</li><br>
                        <li><span class="material-symbols-outlined">call</span>Telefone: (11) 96150-4684 </li><br>
                        <li><span class="material-symbols-outlined">mail </span>Email: saveasoul2023@gmail.com</li><br>
                      </ul>
                    
          
          
       
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