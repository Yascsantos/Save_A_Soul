<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    $_SESSION['id_ani'] = $_GET['id']; //id_pro
    $id_ani = $_SESSION['id_ani'];

    if($_GET['id'] == "" && $_GET['id'] == 0)
    {

    }    

    echo "<h2>Mais imagens do animal</h2>
        <a href='cad.php'>Cadastrar</a>
        <br>
        <a href='list.php'>Listar</a>
        <br><br>
        <a href='../adm/produtos/produtos/listagem/pro.php'>Voltar</a>
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