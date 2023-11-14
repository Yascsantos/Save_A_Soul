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
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,200;1,300&family=Righteous&display=swap');
  #car{
    width: 100%;
  height: 600px;
  border: none;
  margin-top: 10px;
  overflow-y: hidden;

  }

        .carrinho {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 200%;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);

    z-index: 1;
    justify-content: center;
    align-items: center;
}

.content-carrinho  {
    background-color: #ffff;
    width:60%;
    margin:auto;
    padding: 10px;
    text-align: center;
    color:#fff;
    font-family: 'Poppins';
    position: relative;
 

    font-family: 'Poppins';
        background-size:cover;
        justify-content: center;
     
   
}

.fechar {
    position: absolute;
    top: 10px;
    left: 20px;
    font-size: 24px;
    cursor: pointer;
    color:#2c491b;
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
          <li> <a href="../index.php">INICIO</a></li>
          <li> <a href="../adm/animais/listagem/grade.php">ANIMAIS</a></li>
          <li> <a href="../adm/produtos/produtos/listagem/pet/grade_nova.php">PETSHOP</a></li>
          <li> <a id="open-doar">DOE</a></li>
          <div id="doar" class="carrinho">

<div class="content-carrinho">
<span class="fechar" id="close-doar"  onclick="reloadPage()">&times;</span>
    
 
    <iframe src="../funcoes/doacao/painel.html" id="car"  scrolling="no" ></iframe>
    <script>
    const doarModal = document.getElementById('doar');
const openDoarButton = document.getElementById('open-doar');
const closeDoarButton = document.getElementById('close-doar');



openDoarButton.addEventListener('click', () => {
  doarModal.style.display = 'block';
});


closeDoarButton.addEventListener('click', () => {
    doarModal.style.display = 'none';
});
function reloadPage() {
            location.reload();
        }
</script>

</div>
</div>
          <li><a href="../usuario/perfil/perfil.php"><span class="material-symbols-outlined">account_circle</span></a></li>
          <br>
       </ul>

       </nav>
</header>
    <section id="ajuda">
            <div class="ajuda-content">
          
    </section>
    <section class="sobre" id="sobre">
        <div class="max-width">
            
            <div class="sobre-content">
          
                <div class="column left">
                    <img src="imgs/dog6.jpg" alt="">
                </div>
                <div class="column right"><b>
                    <h2>Oi, eu sou o Duke</h2><br>
                Felizmente já fui adotado e agora vivo uma vida feliz com a minha nova familia,
                 mas tenho muitos outros aumigos que precisam de um lar, 
                 click abaixo e conheça alguns dos meus aumigos, talvez você se apaixone assim como a mamãe se apaixonou por mim.
          </b><br>
                    <a href="../adm/animais/listagem/grade.php">Animais</a>
                </div>
            </div>
        </div>
    </section>
    <section class="pet" id="pet">
        <div class="max-width">
            
            <div class="pet-content">
                <div class="column right">
               <b> Esse é Thomas nosso lindo vira-latinha, que adora estar na moda.
                 Você também pode deixar seu pet estiloso e confortável, assim como Thomas, basta clicar no botão abaixo ou no menu e verifique algumas das nossas diversas ropinhas, acessorios e utencilios. 
        Desse modo, você ajuda a nossa causa, pois uma parte do dinheira vai para o nosso abrigo.
              <br></b>
                    <a href="../adm/produtos/produtos/listagem/pet/grade_nova.php">Petshop</a>
                
                </div>
                <div class="column left"><b>
                <img src="imgs/dog4.jpg" alt="">
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
                    <a id="open-doe">Doe</a>
                    <div id="doe" class="carrinho">

<div class="content-carrinho">
<span class="fechar" id="close-doe"  onclick="reloadPage()">&times;</span>
    
 
    <iframe src="../funcoes/doacao/painel.html" id="car"></iframe>
    <script>
    const doeModal = document.getElementById('doe');
const openDoeButton = document.getElementById('open-doe');
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


                </div>
            </div>
        </div>
    </section>

  


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