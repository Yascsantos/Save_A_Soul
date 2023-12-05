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
 #adote{
  width:400px;
  height: 500px;
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

ion-icon{
  font-size: 30px;
  
}
</style>
<body>
<header id="menu">
      <nav>
      <img src="../../../petshop/imgs/logo.png" >
     <ul class="nav-list">
          <li> <a href="../../../index.php">INICIO</a></li>
          <li> <a href="../../produtos/produtos/listagem/pet/grade_nova.php">PETSHOP</a></li>
          <li> <a href="../../../sobre/sobre.php">SOBRE NÓS</a></li>
       <li><a href="../../../usuario/perfil/perfil.php"><span><ion-icon name="person"></a></ion-icon></span>
          <br>
       </ul>

       </nav>
</header>
<section id="inicio">
</section>
<section id="sobre">

            <div class="sobre-content">
            <h1 >A espera de um lar...</h1>
<?php
    include_once("../../../conexaoBD.php");
    $sql= "SELECT * FROM animal WHERE status = 'disponivel'";
    $instrucao = mysqli_query($conexao,$sql);


    foreach ($instrucao as $exibe) 
    {
        echo "
        <div class='card'>
<img src=".$exibe['img_ani']." alt='Imagem padrão' width='100px' height='100px'><br><br>

      <h2>".$exibe['nome_ani']." </h2>

        <a href='../../../funcoes/adocao/msg.php?&codigo=".$exibe['id_ani']."'>Adotar</a>
       
       <a href='../../../funcoes/abrigo/lar.php?&codigo=".$exibe['id_ani']."'>Abrigar</a> </div> ";

    }
  
?>

  
</body>
</html> <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../../../petshop/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
