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
        $password = $_POST['senha'];
        $usuario = $_POST['usuario'];

        $sql= "SELECT * FROM user WHERE usuario = '$usuario'";
        $query= $conexao->query($sql);

        foreach($query as $dados)
        {
            $user = $dados['id_user'];
        }

        if(empty($user))
        {
            echo "<main class='erro'><h3>Usuário não encontrodado</h3>
                <img src='./imgs/atenção.png'></main>";
        }

        else
        {
            foreach($query as $exibercent)
            $hash = $exibercent['senha'];

            if(strlen($usuario) == 0 && strlen($password) == 0  )
            {           
                echo "<main class='erro'><h3>Preencha seus dados</h3>
                    <img src='./imgs/atenção.png'></main>";
            }
            
            else 
            {
                if(password_verify($password, $hash))
                {
                    header ('Location:../../index.php');
                    if(!isset($_SESSION))
                    {
                        session_start();
                    }
                    $_SESSION['id_user'] = $user;
                } 
                else 
                {
                    echo "<main class='erro'><h3>SENHA INCORRETA</h3>
                    <img src='./imgs/atenção.png'></main>";
            
            
                }
            }            
        }
    }



?>