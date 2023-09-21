<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    $_SESSION['codigo'] = $_GET['codigo']; //id_animal
    $id_ani = $_SESSION['codigo'];

    if($_GET['codigo'] == "" && $_GET['codigo'] == 0)
    {

    }    

    echo "
        <main>
        <div class='caixa'>
            <div class='espaco'></div>
              <div class='caixa-dados'><h2>Imagem padrão do produto</h2>
              <a onclick='openCad()' >Cadastrar/mudar</a><br>
        
        
            <div id='popupContainer' style='display: none;'>
                <div  class='popup' >
                 <span class='material-symbols-outlined' onclick='closeCad()'>
                close
                </span> 
                <br><br>
              
              <iframe src='cad_img.php'></iframe>
             
                </div>
            </div>
        
            <script>
                function openCad() {
                    document.getElementById('popupContainer').style.display = 'block';
                }
        
                function closeCad() {
                    document.getElementById('popupContainer').style.display = 'none';
                }
            </script>
        <br>
        <a href='../delete/del_img.php'>Deletar</a>
        <br><br>
        <a href='../pg05.html'>Voltar</a>
        "
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../../css/style.css">
    <title>Imagem dos produtos</title>
   
</head>
<style>
     .popup label {
             display: block;
             margin-bottom: 10px;
         }
 
     
             .popup {
                height:200px;
               width: 400px;
               padding: 20px;
               background-color: #fff;
               border: 1px solid #ccc;
               position: absolute;
               top: 50%;
               left: 50%;
               transform: translate(-50%, -50%);
               text-align: center;
             }
         
           .popup  iframe {
             border: none;
             width:100%;
             }
             .popup .material-symbols-outlined{
               margin-left:90%;
               color:rgb(156, 0, 0);
             }
             
      
</style>
</body>
</html>