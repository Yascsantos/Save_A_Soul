<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    $_SESSION['codigo'] = $_GET['codigo']; //id_pro
    $id_imp = $_SESSION['codigo'];

    if($_GET['codigo'] == "" && $_GET['codigo'] == 0)
    {

    }    

    echo "<h2>Imagem padrão do produto</h2>
        <a href='cads.php'>Cadastrar/mudar</a>
        <br>
        <a href='delete.php'>Deletar</a>
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