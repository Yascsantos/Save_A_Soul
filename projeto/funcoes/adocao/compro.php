<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontro Agenado</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
    main{
  
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  min-height: 10vh;

}
    .encontro{
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
    width: 600px;
     margin-top: 200px;
  
    font-family: "Poppins", sans-serif;
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
<body> <main>
    <div class='encontro' >
    <a href='../../adm/animais/listagem/grade.php'>X</a>
    <h2>Encontro Agenado</h2>


<?php
    include_once("../../conexaoBD.php");

    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_adocao = $_SESSION['id_adocao'];
    $user = $_SESSION['id_user'];

    $sql_code = "SELECT * FROM adocao where id_ado = $id_adocao and id_user = $user";
    $code = mysqli_query($conexao,$sql_code);
    foreach ($code as $dade) 
    {
        $id_ado = $dade['id_ado'];
        $id_ani = $dade['id_ani'];
        $data = $dade['data_entre'];
        $hora = $dade['horario'];
    }

        //USER
        $query= "SELECT * FROM user where id_user = $user";
        $requery = mysqli_query($conexao,$query);
        foreach ($requery as $dados) 
        {
            $nome_user = $dados['nome'];
            $email = $dados['email'];

        }
        

        //ANIMAIS
        $sql= "SELECT * FROM animal where id_ani = $id_ani";
        $instrucao = mysqli_query($conexao,$sql);
        foreach ($instrucao as $exibe) 
        {
            $nome = $exibe['nome_ani'];
            $raca = $exibe['raca'];
            $porte = $exibe['porte'];
            $sexo = $exibe['sexo'];

            echo "Olá ".$nome_user."!<br>  Você marcou um encontro com o(a) $nome. <br> <br><b>Esperamos você!!</b><br><br>";
            echo "OBS: Você receberá as demais informações no seu e-mail:  ".$email." <br>";
            echo "<br><br>";

        }

    


    

?></div>
</main>
</body>
</html>