<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../adm/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap">
    <title>Imagem dos produtos</title>

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
</head>
<body>
<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    $_SESSION['id_imgani'] = $_GET['id']; // id_do animal
    $id_ani = $_SESSION['id_imgani'];

    if ($_GET['id'] == "" && $_GET['id'] == 0) {

    }

    echo "<main>
        <div class='caixa'>
            <div class='caixa-dados'>
            <h2>Mais imagens do animal ".$id."</h2>
            <a onclick='openCad()'>Cadastrar</a>
    <br>
            <div id='popupContainer' style='display: none;'>
                <div  class='popup' >
                 <span class='material-symbols-outlined' onclick='closeCad()'>
                close
                </span>   <br><br>
          
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
                <a href='../adm/produtos/produtos/listagem/pro.php'>Voltar</a>
            </div>
        </div>
    </main>";
?>
</body>
</html>