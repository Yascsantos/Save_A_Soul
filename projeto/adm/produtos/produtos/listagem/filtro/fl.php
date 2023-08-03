<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop| Save a Soul</title>
    <link rel="icon" type="imagem/png" href="../index/imgs/logo1.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../../../../petshop/css/petshop.css" type="text/css"></head>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
 
    * {
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
  button{
    width: 30%;
    height:30px;
    background: #adb5a0;
    border-radius: 20px;
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
      
        .popup  iframe {
          border: none;
          }
  
  
</style>
<body>
<header id="menu">
      <nav>
   <img src="../../../../../index/../imgs/logo.png" >
        <div class="mobile-menu">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
             
            </div>
     <ul class="nav-list">
          <li> <a href="../../../../../index/index.php">INICIO</a></li>
          <li> <a href="#">DOAR</a></li>
          <li> <a href="../../../animais/listagem/grade.php">ADOTE</a></li>
          <li> <a href="#">SEJA VOLUNTÁRIO</a></li>
          <li><a href="../../../../../usuario/perfil/perfil.php"><span class="material-symbols-outlined">account_circle</span></a></li>
          <br>
       </ul>

       </nav>
</header>
<section class="filtro">
  <div class="max-width">
              
    <div class="filtro-content">
      
           <span class='material-symbols-outlined' onclick='openPopup()'>tune</span>
        <div id='popupContainer' style='display: none;'>
                    <div  class='popup' >
                      <br><br>
                          <?php include_once("filtro.php"); ?>
                          </div>
                      
                  
                      <script>
                          function openPopup() {
                              document.getElementById('popupContainer').style.display = 'block';
                          }
                  
                          function closePopup() {
                              document.getElementById('popupContainer').style.display = 'none';
                          }
                      </script>
                      </div>
                        <div><?php  include_once("barra.php"); ?></div> 
                        </div> </div> </div>
     
    <h2 class='title'>Petshop</h2>
    <section class="sobre" id="sobre">
        <div class="max-width">
    
            <div class="sobre-content">
  
  <?php
    //caso o filto seja selecionado
    if(isset($_POST['filtrar']))
    {
        if(!isset($_SESSION))
        {
            session_start();
        }
    
        $_SESSION['cat'] = $_POST['categoria']; //id_pro
        $cat = $_SESSION['cat'];
      }
            //se o campo for nulo 
            if ($cat == "0")
            {
                include_once("../../../../../../conexaoBD.php");
                $sql_code= "SELECT * FROM produto";
                $pesquisa = mysqli_query($conexao,$sql_code);
                           
              
                
     foreach ($pesquisa as $exibe) 

     {
  
        echo "
     
        <div class='column left'>
            
                            <a href='../../../../../petshop/perfil.php?&codigo=".$exibe['id_pro']."'><img src=".$exibe['img_pro']." alt='Imagem padrão' width='100px' height='100px'></a><br>
            
                    <a href='../../../../../petshop/perfil.php?&codigo=".$exibe['id_pro']."'>".$exibe['prod']."
    
                            <p>R$".$exibe['preco']."</p><br>
                            
                
                            </div>
        
                        ";
                           
                }
        


                   
            }
    
    
                //campo NÃO for nulo
                include_once("../../../../../conexaoBD.php");
                $sql_query= "SELECT * FROM produto Where id_cat = $cat ";
                $requery = mysqli_query($conexao,$sql_query);
                    
                  
                    
                foreach ($requery as $dados) 
                {
                    echo "
                    <div class='column left'>
                <a href='../../../../../petshop/perfil.php?&codigo=".$dados['id_pro']."'><img src=".$dados['img_pro']." alt='Imagem padrão' width='100px' height='100px'></a><br>
                         <a href='../../../../../petshop/perfil.php?&codigo=".$dados['id_pro']."'>".$dados['prod']."</a>
                       <p> R$".$dados['preco']."</p>
                        ";
                    
                }
            
    
    
        
    
        else
        {
            //se o filtro NÃO for selecionado 
            $sql= "SELECT * FROM produto";
            $instrucao = mysqli_query($conexao,$sql);
    
            foreach ($instrucao as $exibe) 
            {
                echo "
            <a href='../../../../../petshop/perfil.php?&codigo=".$exibe['id_pro']."'><img src=".$exibe['img_pro']." alt='Imagem padrão' width='100px' height='100px'></a><br>
        
                    
                <a href='../../../../../petshop/perfil.php?&codigo=".$exibe['id_pro']."'>".$exibe['prod']."</a>
                   <p> R$".$exibe['preco']."</p>
                ";
            }
    
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