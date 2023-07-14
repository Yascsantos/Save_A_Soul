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

    echo "
    <main>
    <div class='caixa'>
        <div class='espaco'></div>
          <div class='caixa-dados'><h2>Imagem padrão do produto</h2>
        <a href='cad_img.php'>Cadastrar/mudar</a>
        <br>
        <a href='../delete/del_img.php'>Deletar</a>
        <br><br>
        <a href='../index.html'>Voltar</a></div>

        </div>
        </main>
        "
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Imagem dos produtos</title>
</head>
<body>
</body>
</html>