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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <h1>Usuários :)</h1>
    <h3><a href="../produtos/produtos/listagem/usuario/nota.php">Pedidos do usuário</a></h3>

    <h3><a href="page.html">Cadastar notas </a></h3>

    <a href="listagem.php">Voltar</a>


</body>
</html>