<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    $_SESSION['codigo'] = $_GET['codigo']; //id_animal
    $id_ani = $_SESSION['codigo'];

    if($_GET['codigo'] == "" && $_GET['codigo'] == 0)
    {

    }    

    echo "<h2>Imagem padrão do animal</h2>
        <a href='cad_img.php'>Cadastrar/mudar</a>
        <br>
        <a href='../delete/del_img.php'>Deletar</a>
        <br><br>
        <a href='../pg05.html'>Voltar</a>
        "
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagem padrão do animal</title>
</head>
<body>
</body>
</html>