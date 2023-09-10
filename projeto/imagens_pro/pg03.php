<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    $_SESSION['id_ip'] = $_GET['codigo']; //id_pro
    $id = $_SESSION['id_ip'];

    if($_GET['codigo'] == "" && $_GET['codigo'] == 0)
    {

    }    

    echo "<h2>Mais imagens do produto ".$id."</h2>
        <a href='cad.php'>Cadastrar</a>
        <br>
        <a href='list.php'>Listar</a>
        <br><br>
        <a href='../adm/produtos/produtos/cadastro/infos/pro.php'>Voltar</a>
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