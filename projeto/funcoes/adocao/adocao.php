<?php
    include_once("../../conexaoBD.php");
    include_once("protect.php");

    if(!isset($_SESSION))
    {
        session_start();
    }
    $user = $_SESSION['id_user'];
    $id = $_GET ['codigo'];
    $_SESSION['id_ani'] = $id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Encontro</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
    body{
        background-image: url(../../sobre/imgs/fundo-s.jpg);
    }
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
<body>
    <main>
    <div class='encontro' >
    <h1>Seu encontro</h1>
    <p>Antes de adota-lo você precisa conhece-lo. <br>
        Preencha o formulário a baixo para marcarmos seu encontro.
    </p>

    <h2>Formulário</h2>
    <form method="post" action="">
        <input type="date" name="data"/>
        <input type="time" name="horas"/>
        <div class='input'>
        <input type="submit" name="enviar" value="Enviar" /></div>
    </form>
    </div></main>
</body>
</html>
<?php

    if(isset($_POST['enviar']))    
    {
        $data = $_POST['data'];
        $hora = $_POST['horas'];
    
        $tabela="adocao";
        $campo= "id_user, id_ani, data_entre, horario, status"; 

        $sql = "INSERT INTO $tabela ($campo) 
        VALUES ('$user','$id','$data', '$hora', '---')";

        $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

        if (!$instrucao) 
        {
            die(' Query Inválida: ' . mysqli_error($conexao));
        }
        
        
        else 
        {
            $code = "UPDATE animal SET 
            status = 'analise',
            modalidade = '---' 
            WHERE id_ani = $id";
            $codigo= $conexao->query($code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

            if (!$codigo) 
            {
                die(' Query Inválida: ' . mysqli_error($conexao));
            }

            else 
            {
                $sql_code = "SELECT * FROM adocao where id_ani = $id and id_user = $user";
                $code = mysqli_query($conexao,$sql_code);
                foreach ($code as $dade) 
                {
                    $id_adocao = $dade['id_ado'];
                    $_SESSION['id_adocao'] = $id_adocao;
                    header ('location:compro.php');
                }
    
            }

        }

    }



?>