<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../adm/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Imagem dos produtos</title>
   
</head>
<style>
     .popup label {
             display: block;
             margin-bottom: 10px;
         }
 
     
             .popup {
                height:100px;
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
</head>
<body>

        



<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    $_SESSION['id_ip'] = $_GET['codigo']; //id_pro
    $id = $_SESSION['id_ip'];

    if($_GET['codigo'] == "" && $_GET['codigo'] == 0)
    {

    }    

    echo "
    <main>
<div class='encontro'>
<h2>Mais imagens do produto ".$id."</h2>
        <a onclick='openCad()'>Cadastrar</a>
<br>
        <div id='popupContainer' style='display: none;'>
            <div  class='popup' >
             <span class='material-symbols-outlined' onclick='closeCad()'>
            close
            </span> 
            <br><br>
          
          <iframe src='cad.php'></iframe>
         
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
        <a href='list.php'>Listar</a>
        <br><br>
        <a href='../adm/produtos/produtos/cadastro/infos/pro.php'>Voltar</a>
        "
?>

</div>
</main>
</body>
</html>