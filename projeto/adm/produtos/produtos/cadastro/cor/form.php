<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=c">
    <link rel="stylesheet" href="../../../../css/style.css">
    <title>Cadastro de categorias</title>
</head>
<style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
        body{
        font-family: 'Poppins';
        background-size:100% 100%;
        background-image:url(../../../../../index/imgs/fundo-s.jpg);
        color:white ;
       
    }
       
  #menu{
  position: fixed;
  width:100%;
  height:110px;
  font-family: 'Poppins';

 
}
img{
  width:100px;
  height:100px;
margin-top:auto;
}

  nav {
    display: flex;
    justify-content: space-around;
    align-items: center;
    font-family: 'Poppins';
    height: 12vh;
  }
  

  .nav-list {
    list-style: none;
    display: flex;
  
  }
  
  .nav-list li {
    letter-spacing: 3px;
    margin-left: 32px;
    margin-top: auto;
   
  }
 

.max-width{
    max-width: 1300px;
    padding: 0 80px;
    margin: auto;
}
#menu a{
    font-family: 'Poppins';
    font-size: 0.9rem;
    text-decoration:none;
    font-size: 0.9rem;
    font-weight:600;
    color:#fcfcfc;
  }
 
  #menu a:hover{
    color:#3a3a3b;
  }
    </style>
<body>

<header id="menu">
      <nav>
   <img src="../../../../../petshop/imgs/logo.png" >
     <ul class="nav-list">
          <li>
          <a href="../infos/pro.php"> Voltar </a> </li>
          <li> <a href=".././listagem/list.php">Listar categorias</a></li>
       </ul>

       </nav>
</header>
<main>
<div class="caixa">
            <div class='espaco'></div>
              <div class="caixa-dados">
    <h2>Cadastro de categorias</h2>
 

    <form action="cad_cor.php" method="post">
    <div class='input-dados'>
        <label>Cor: </label> 
        <input type="text" placeholder="Cor" name="cor"><br>
        <button input type="submit" name="cadastrar" value="cadastrar">Cadastrar</button>
        </div>
    </form>
    </div>
</div>
</div>
</main>
</body>
</html>

