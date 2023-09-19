
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
    <link rel="stylesheet" href="../../../../../petshop/css/petshop.css" type="text/css"></head>
</head>
<?php
//filtro

    //montagem do filtro 
    include_once("../../../../../conexaoBD.php");
    $sql= "SELECT * FROM categoria";
    $instrucao = mysqli_query($conexao,$sql);

    if(isset($_POST['pesq']))
    {
       
    
        $_SESSION['cat'] = $_POST['categoria']; //id_pro
        $cat = $_SESSION['cat'];
       
    }
      
    echo "
    <style>
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
    button .pesq{
      width: 20px;
      height:30px;
      background-color: #08080800;
      outline: none;
      border: none;
     position:relative;
     top:-45px;
     left:180px;
      color: white;
      font: size 14px;px;
     
  }  </style> <div class='input-dados'>
            <form action='../filtro/fl.php' method='POST'>
            <h2>Escolha a categoria</h2>
            <select name='categoria' required>
            <option value='0'>Selecione a categoria</option>
    ";
    foreach ($instrucao as $exibe) 
    {
        echo "<option value=".$exibe['id_cat'].">".$exibe['nome_cat']."</option>";

    }
    echo "</select>";
    echo "<br><button input type='submit' name='pesq' value='pesq'>Filtro<button/>";
    echo "</form>";
    echo "</div>";

?>