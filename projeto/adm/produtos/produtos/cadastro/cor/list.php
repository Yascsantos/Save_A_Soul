<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../css/style.css">
    <title>Listagem de cores</title>
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
          <li> <a href="form.php"> Cadastrar + cores </a></li>
       </ul>

       </nav>
</header>
<main>
<div class="caixa">
            <div class='espaco'></div>
              <div class="caixa-dados">
    <h1> Listagem de cores dos produtos </h1>
    <br>
   
    <br> <br>

<?php
    	if(!isset($_SESSION))
        {
            session_start();
        }
        $code = $_SESSION['code'];

    include_once("../../../../../conexaoBD.php");
    $sql= "SELECT * FROM cores where id_pro = $code ";
    $instrucao = mysqli_query($conexao,$sql);

    echo "
    <table> 
        <tr>
            <th></th>
            <th></th>
            <th> </th>
            <th align='center'>Produto</th>
            <th> </th>
            <th align='center'>Cores</th>
            <th></th>
            <th></th>
            <th></th>

        </tr>";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <tr>
            <td align='center'><a href='alter.php?&codigo=".$exibe['id_cor']."'>Alterar </a></td>
            <td></td>
            <td></td>
            <td align='center'>".$exibe['id_pro']."</td>
            <td></td>
            <td align='center'>".$exibe['cor']."</td>
            <td></td>
            <td align='center'><a href='drop.php?&codigo=".$exibe['id_cor']."'>Delete</a></td> 
            <td></td>
        </tr>
        ";
    }
    echo"</table>";
?>
</div>
</div>
</div>
</main>