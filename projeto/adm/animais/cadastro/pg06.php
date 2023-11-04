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
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
    main{
  
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  min-height: 10vh;

}
body{
    background-size: cover;
        background-position: cover;
        background-image:url(../../../index/imgs/fundo1.jpg);

       
    }
a {
    
      font-size: 0.9rem;
      text-decoration:none;
      font-size: 0.9rem;
      font-weight:600;
      color: black;
      
    }
   
    a:hover{
      color:#3a3a3b;
    }
    .encontro{
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
    width: 700px;
     margin-top: 200px;
  
    font-family: 'Poppins', sans-serif;
    background-color: rgba(255, 255, 255, 0.993);
    padding: 30px 40px;
    text-align: justify;
    }
    input label{
    color: #4c5838;
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

form  input{
    width: 20%;
    height: 27px;
    background-color: rgba(255, 255, 255, 0.32);
    border-radius: 20px;
    outline: none;
    border: 2px solid transparent;
    padding: 15px;
    font-size: 15px;
    color: #616161;
    transition: all 0.4s ease;
}
form  input:focus{
    border-color: #adb5a0;
}
input[type='submit']{
    background:#4c5838;
    color: #fff;
    height: 47px;
}
</style>
<body>
    <main>
    <div class='encontro' > <h2>Imagem padrão do produto</h2>
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

</div>
</main>
</body>
</html>