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
<?php
    //barra de pesquisa
    include_once("../../../../../conexaoBD.php");

    //formulário
    echo"
    <style>
    form .input-dados input{
      width: 100%;
      height: 30px;
      background-color: rgba(255, 255, 255, 0.32);
      border-radius: 20px;
      outline: none;
      border: 2px solid transparent;
      padding: 15px;
      font-size: 15px;
      color: #616161;
      transition: all 0.4s ease;
      display:flex;
  }
  form .input-dados input:focus{
      border-color: pink;
  }
   select{
      width: 100%;
      height: 50px;
      background-color: rgba(255, 255, 255, 0.32);
      border-radius: 20px;
      outline: none;
      border: 2px solid transparent;
      padding: 13px;
      font-size: 15px;
      color: #616161;
      transition: all 0.4s ease;
  }
  .pesq{
    width: 20px;
    height:30px;
    background: #adb5a0;
    outline: none;
    border: none;
   position:relative;
   top:-45px;
   left:180px;
    color: white;
   
}  </style>";
    echo "<form action='../barra/br.php' method='POST'>
  <div class='input-dados'>
 
            <input type='text'name='barra' placeholder='Pesquise aqui o produto'/>
            <button input type='submit'name='pesquisar' value='pesquisar' class='pesq'><span class='material-symbols-outlined'>
            search
            </span></button>
            </div>
            </form>"
   ;
        

    
      

?>