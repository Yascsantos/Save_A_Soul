<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adotar</title>
</head>
<style>
    
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&family=Ubuntu:wght@400;500;700&display=swap');
    body{
      
        font-family:'Roboto';}
   
    .sobre-produto{
        box-shadow:2px 3px 10px 5px rgba(0, 0, 0, 0.2);
      border-top:1px solid black;
       display:flex;
       padding: 30px 40px;
      
   }
   
   .img img{
    padding: 10px 50px 50px 50px;
      width:300px;
      heigth:300px;
      
   }
   .info-prod {
    border-left:1px solid black;

       margin-top: auto;
       padding:30px;
       text-aling:center;
       font-family:'Roboto';
       color: #4c5838;

   }
   .tam {
  display:flex;
  
}
label{
    color: #4c5838;
    font-weight: bold;
    display: block;
}
.comprar{
    align-items: center;
    height:50px;
    background: #080808;
    color: white;
    font-size: 20px;
  }

  .num{
    width:20%;

  }
 input {
    background-color: rgba(255, 255, 255, 0.32);
    border-radius: 20px;
    outline: none;
    border: 2px solid transparent;
    padding: 10px;
    font-size: 15px;
    color: #616161;
    transition: all 0.4s ease;
}
form  input:focus{
    border-color: #adb5a0;
}
a{
    color: hsl(257, 11%, 88%);
    text-decoration: none;
}
    </style>
<body>
<div class='sobre-produto'>
    

<?php
    include_once("../../conexaoBD.php");
    include_once("protect.php");

    echo "  <div class='img'>
    <p>
    Quando os animais ficam muito tempo em situação de rua, eles desaprendem a lidar com humanos.<br>
    Para reverter esse problema a Save a Soul,<br>
     propôs um projeto em colaboração com a comunidade de <br>
    “Lar voluntário” onde os voluntários ajudariam esses animais a se reabilitarem, 
    <br>com o auxilio da ONG 
    (em medicamentos, comida, vacinas, etc.)
    </p>
        
        </div>
        "; 
        
        echo "  <div class='info-prod'> "; 
    if(!isset($_SESSION))
    {
        session_start();
    }
    $_SESSION['id_ani'] = $_GET['codigo']; //id_ani
    $id = $_SESSION['id_ani'];
    
    //ANIMAIS
    $sql= "SELECT * FROM animal where id_ani = $id";
    $instrucao = mysqli_query($conexao,$sql);
    foreach ($instrucao as $exibe) 
    {
        $nome = $exibe['nome_ani'];
        $raca = $exibe['raca'];
        $porte = $exibe['porte'];
        $sexo = $exibe['sexo'];

       
        echo "   Esse(a) é o(a) $nome. <br> Ele(a) é um(a) $raca, de porte $porte e um(a) $sexo.
      <br><br>"; echo " 
                O $nome faz parte desse projeto. Deseja ajuda-lo?
                <a href='abrigo.php?codigo=$id'>Sim</a>
                <a href='../../adm/animais/listagem/grade.php'>   Não</a>
            </p>";

    }
?>   </div></div>