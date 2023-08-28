<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como ajudar| Save a Soul</title>
    <link rel="icon" type="imagem/png" href="imgs/logo1.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ajude.css" type="text/css"></head>
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
          <li> <a href="index.php">INICIO</a></li>
          <li> <a href="#">DOE</a></li>
          <li> <a href="../adm/animais/listagem/grade.php">ADOTE</a></li>
          <li> <a href="../adm/produtos/produtos/listagem/pet/grade_nova.php">PETSHOP</a></li>
          <li> <a href="#">SEJA VOLUNTÁRIO</a></li>
          <li><a href="../usuario/perfil/perfil.php"><span class="material-symbols-outlined">account_circle</span></a></li>
          <br>
       </ul>

       </nav>
</header>
</section>
    <section id="ajuda">
            <div class="ajuda-content">
            <div class="column left">
 
<div class='p'>
<b><h2 class='title'>VOCÊ TAMBÉM PODE FAZER PARTE DESTA LUTA</h2></b>
<p>A sua ajuda pode salvar a vida de diversos animais carentes e auxiliar na luta <br>
contra o abandono e maus-tratos.</div>
</div>


        </div>
    </section>
    <section class="sobre" id="sobre">
        <div class="max-width">
            
            <div class="sobre-content">
                <div class="column left">
                    <img src="imgs/dog6.jpg" alt="">
                </div>
                <div class="column right"><b>

                Preencha o formulário abaixo com seus dados corretos, responda com o máximo de precisão sobre suas expectativas e rotina, esse é o início do nosso processo de adoção,
                 responda à todas as perguntas com atenção que em breve entraremos em contato.<br></b>
                    <a href="../adm/produtos/produtos/listagem/pet/grade_nova.php">Petshop</a>
                </div>
            </div>
        </div>
    </section>

    <section class="sobre" id="sobre">
        <div class="max-width">
            
            <div class="sobre-content">
                <div class="column left">
                    <img src="imgs/dog5.jpg" alt="">
                </div>
                <div class="column right"><b>

                Nossos amiguinhos precisam muito de um novo lar e um abrigo. <br>
                Ajude-nos a cuidar deles.<br>
                Conheça nossos amiguinhos<br></b>
                    <a href="../adm/animais/listagem/grade.php">Animais</a>
                </div>
            </div>
        </div>
    </section>



<section class="sobre">

        <div class="max-width">

            <div class="sobre-content">

                <div class="column left">
                    <img src="imgs/dog3.jpg" alt="">
                </div>
                <div class="column right">
<b>
A sua colaboração fortalece a defesa das nossas causas.

Você pode escolher entre fazer uma doação recorrente, onde já fica programada uma doação mensal. Ou se preferir, você pode também fazer uma doação única, que nos apoia pontualmente.

Para sua segurança, utilizamos a plataforma do Paypal para o recebimento das doações. Por isso, ao clicar no botão de doação, uma nova página será aberta para que a transação da doação seja realizada.

Seja qual for a sua escolha, seu apoio ajuda nosso trabalho ter mais estabilidade e continuidade.<br></b>
                    <a href="#">Doe</a>
                </div>
            </div>
        </div>
    </section>
<!--
    <section class="sobre" id="sobre">
        <div class="max-width">
            
            <div class="sobre-content">
                <div class="column left">
                    <img src="imgs/dog4.jpg" alt="">
                </div>
                <div class="column right">

                <b>A sua colaboração fortalece a defesa das nossas causas.

Você pode escolher entre fazer uma doação recorrente, onde já fica programada uma doação mensal. Ou se preferir, você pode também fazer uma doação única, que nos apoia pontualmente.

Para sua segurança, utilizamos a plataforma do Paypal para o recebimento das doações. Por isso, ao clicar no botão de doação, uma nova página será aberta para que a transação da doação seja realizada.

Seja qual for a sua escolha, seu apoio ajuda nosso trabalho ter mais estabilidade e continuidade.<br></b>
                    <a href="#">Seja voluntário</a>
                </div>
            </div>
        </div>
    </section>
-->
  


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