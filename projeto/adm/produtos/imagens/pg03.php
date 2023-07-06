<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    $_SESSION['id_ip'] = $_GET['id'];

    if($_GET['id'] == "" && $_GET['id'] == 0)
    {

    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagem dos produtos</title>
</head>
<body>
    <h2>Imagens</h2>
    <a href="cad/cad.php">Cadastrar imagens</a>
    <br>
    <a href="listagem/list.php">Listar imagens</a>
    <br>
    <a href="../index.html">Voltar</a>

</body>
</html>