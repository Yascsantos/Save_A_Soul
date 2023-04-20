<!--EXECUÇÃO DE PHP-->
<?php
    include_once("../../conexaoBD.php");
?>

<!--FORMULÁRIO DE LOGIN-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <h4>Não possui cadastro? <a href="../cadastro/cadastro.html">Cadastre-se já</a></h4>
    <form action="" method="post">
        <label>Usuário: </label>
        <input type="text" name="usuario" id="usuario" placeholder="Enter Your Name">
        <br>
        
        <label>Senha: </label>
        <input type="password" name="senha" id="senha" placeholder="Enter Your Password">
        <br>          

        <input type="submit" name="Logar" value="Logar">
    </form>
   
</body>

<!--EXECUÇÃO DE PHP-->
<?php

    if(isset($_POST['usuario']) || isset($_POST['senha']))
    {
        // mensagem caso os campos sejam enviados vazios
        if(strlen($_POST['usuario']) == 0 && strlen($_POST['senha']) == 0  )
        {
            echo "Preencha seus dados";
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
                echo "<center>Falha ao Logar!
                      <br> 
                      Usuário ou senha incorretos </center>";
            }
    }
}
    


?>