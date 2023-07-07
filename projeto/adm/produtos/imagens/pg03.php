<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    $_SESSION['id_ip'] = $_GET['id']; //id_pro
    $id = $_SESSION['id_ip'];

    if($_GET['id'] == "" && $_GET['id'] == 0)
    {

    }    

    echo "<h2>Mais imagens dos produtos</h2>
        <a href='cad/cad.php'>Cadastrar</a>
        <br>
        <a href='listagem/list.php'>Listar</a>
        <br><br>
        <a href='../index.html'>Voltar</a>
        "
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagem dos produtos</title>
</head>
<body>
</body>
</html>