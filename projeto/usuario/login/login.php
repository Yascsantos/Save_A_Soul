<?php
    include_once("../../conexaoBD.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
  
    <main  class="login">
    <h2>Login</h2>
    <div>
    <label>
                Ainda não possui cadastro?<br>
                <a href='../cadastro/cadastro.html'>CADASTRE-SE</a>
            </label>
    </div>
    <br>
    <form action="" method="post" >
        <div class="input">
        <label>Usuário: </label>
        <input type="text" name="usuario" id="usuario" placeholder="Digite seu apelido">
        <div class="linha"></div>
    </div>
        <div class="input">
        <label>Senha: </label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
        <div class="linha"></div></div>
        <br>          

        <input type="submit" name="Logar" value="Logar">
   

    </form>

</main>
   
</body>

<?php

    if (isset($_POST['Logar'])) 
	{
        if(!isset($_SESSION))
        {
            session_start();
        }
        $id = $_SESSION['id_cad'];
        echo $id;

        $sql= "SELECT senha FROM user WHERE id_user = $id";
        $query= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

        foreach($query as $dados)
        {
            $password = $dados['senha'];
            echo $password;
        }

        if(isset($_POST['usuario']) || isset($_POST['senha']))
        {
            
            if(strlen($_POST['usuario']) == 0 && strlen($_POST['senha']) == 0  )
            {
                echo "<main class='erro'><h3>Preencha seus dados</h3>
                <img src='./imgs/atenção.png'></main>";
            }
      
        }


   
    /*
       

    else 
    {
        if(password_verify($password, $hash))
        {
            $teste = "Senha correta";
        } else {
            $teste = "Senha incorreta";
        }
        echo $teste;
        

            /*$usuario= $conexao->real_escape_string($_POST['usuario']);
            $senha= $conexao->real_escape_string($_POST['senha']);*/
/*
            $sql_code= "SELECT * FROM user WHERE usuario= '$usuario' AND confirma='$senha'";
            $sql_query= $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

            $quantidade= $sql_query->num_rows;

            if($quantidade == 1)
            {
                $usuario = $sql_query->fetch_assoc();
                

                $_SESSION['id_user'] = $usuario['id_user'];


                header("Location: ../../index/index.php");

            }
            else
            {
                echo "<main class='erro'><h3>Falha ao Logar!
                      <br> 
                      Usuário ou senha incorretos</h3>
                      <img src='./imgs/atenção.png'>
                      </main>";
            }
    }
}*/
    


?>