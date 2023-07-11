<?php
        //id
        if(!isset($_SESSION))
        {
            session_start();
        }
        $_SESSION['id_u']= $_GET['codigo'];
        $cod = $_SESSION['id_u'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações adicionais</title>
</head>
<body>
    <h1>Informações adicionais</h1>
    <p>Anote aqui as informações pertinentes, observadas no cliente após a entrevista.</p>

    <a href="adocao.php">Adoção</a><br>
    <a  href="lar.php">Lar voluntário</a>

</body>
</html>