<!--EXECUÇÃO DE PHP-->
<?php
    include_once("../../conexaoBD.php");
?>

<!--FORMULÁRIO DE LOGIN-->
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
    <form action="" method="post" >
        <div class="input">
        <label>Usuário: </label>
        <input type="text" name="usuario" id="usuario" placeholder="Enter Your Name">
        <div class="linha"></div></div>
        <br>
        <div class="input">
        <label>Senha: </label>
        <input type="password" name="senha" id="senha" placeholder="Enter Your Password">
        <div class="linha"></div></div>
        <br>          

        <input type="submit" name="Logar" value="Logar">
   

    </form>

</main>
   
</body>

<!--EXECUÇÃO DE PHP-->
<?php

    if(isset($_POST['usuario']) || isset($_POST['senha']))
    {
        // mensagem caso os campos sejam enviados vazios
        if(strlen($_POST['usuario']) == 0 && strlen($_POST['senha']) == 0  )
        {
            echo "<main class='erro'><h3>Preencha seus dados</h3>
            <img src='./imgs/atenção.png'></main>";
        }
       

    else 
    {
            //selecionando o usuário e a senha 
            $usuario= $conexao->real_escape_string($_POST['usuario']);
            $senha= $conexao->real_escape_string($_POST['senha']);

            $sql_code= "SELECT * FROM colaboradores WHERE usuario= '$usuario' AND senha='$senha'";
            $sql_query= $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

            
            //selecionando o usuário e a senha     
            $quantidade= $sql_query->num_rows;

            if($quantidade == 1)
            {
                $usuario = $sql_query->fetch_assoc();
                
                if(!isset($_SESSION))
                {
                    session_start();
                }

                $_SESSION['id_user'] = $usuario['id_user'];
                $_SESSION['usuario'] = $usuario['usuario'];


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
}
    


?>