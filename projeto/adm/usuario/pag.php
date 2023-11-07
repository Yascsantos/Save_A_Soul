<?php
        //id_user
        if(!isset($_SESSION))
        {
            session_start();
        }
        $_SESSION['id_u']= $_GET['codigo'];
        $cod = $_SESSION['id_u'];
    
    if ($_SESSION['id_u'] == "" && $_SESSION['id_u'] == "0" )
    {

    }
    include_once("../../conexaoBD.php");
    $sql= "SELECT * FROM user WHERE id_user = $cod";
    $instrucao = mysqli_query($conexao,$sql);

    foreach ($instrucao as $exibe) 
    {
        $nome = $exibe['nome'];
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
    main{
  
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  min-height: 10vh;

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
body{
        font-family: 'Poppins';
        background-size:1500px 900px;
        background-image:url(../../../projeto/index/imgs/fundo-s.jpg);

       
    }
</style>
</head>
<body>
<main>
    <div class='encontro' >
    <h2>Informações dos usuários</h2><br>
    <p>Usuário(a): <b><?php echo $nome;?></b></p>

    <!--Mudar status-->
    <h3>-><a href="./adocao/list.php">Adoção</a></h3>
    <h3>-><a href="./abrigo/list.php">Abrigo</a></h3>


    <a href="listagem.php">Voltar</a>


  

</div>
</main>
</body>
</html>