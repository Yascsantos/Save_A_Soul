<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar senha</title>
</head>
<body>
    <h2>Editar senha</h2>
    <a href="../perfil.php">Voltar ao perfil</a><br><br>


    <form action="mudar.php" method="POST">
    
    <h2>Preencha seus dados</h2><br>
    <label for="senha">Nova senha:</label>
    <input type="password" name="senha" placeholder="Digite sua senha" required><br>

    <label for="confirma">Confirmar nova senha:</label>
    <input type="password" name="confirma" placeholder="Confirme a senha" required><br><br>

    <button input type="submit" name="editar" value="editar"> Editar</button>

    </form>
</body>
</html>

<?php
    include_once("../../../conexaoBD.php");
	if(!isset($_SESSION))
    {
        session_start();
    }
    $id= $_SESSION['id_user'];

	if (isset($_POST['editar'])) 
	{
        $confirma = $_POST['confirma'];
        $senha = $_POST['senha'];

        if ( $senha == $confirma)
		{
            $senha_1 = strlen($senha);
            if ($senha_1 < 8)
            {
                echo "A senha tem que ter no mínimo 8 caracteres";
            }

            else
            {
                define ("SECRETKEY", "mysecretkey1234");
                $hash = password_hash($senha, PASSWORD_DEFAULT); //senha codificada 
                var_dump($hash);
                echo "<br>".$confirma;
            
            
                $sql = "UPDATE user SET  
                senha = '$hash'
                WHERE id_user = '$id'";
                    
                $instrucao = mysqli_query($conexao,$sql);
            
                if ($instrucao) 
                {
                    mysqli_close($conexao);
                    header ('Location:../perfil.php');
                    exit;
            
                } 
                else 
                {
                    die(' Query Inválida: ' . mysqli_error($conexao));
                }

            }

	}
}

?>