<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizualizar senha</title>
</head>
<body>
    <h2>Sua senha</h2>
    <p>Abaixo está a sua senha.</p>
    <p>Caso queira troca-la <a href="mudar.php">Clique aqui</a></p>
    <a href="../perfil.php">Voltar ao perfil</a><br><br>

</body>
</html>
<?php
    include_once("../../../conexaoBD.php");
	if(!isset($_SESSION))
    {
        session_start();
    }

    $id= $_SESSION['id_user'];

    $sql_query = "SELECT confirma FROM user WHERE id_user ='$id'";
    $requery = mysqli_query($conexao,$sql_query);
                
    foreach ($requery as $exibe)
    {
        echo "Senha: <b>".$exibe['confirma']."</b>";
    }

?>