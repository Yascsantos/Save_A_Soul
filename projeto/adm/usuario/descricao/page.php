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
    <title>Informações adicionais</title>
</head>
<body>
    <h1>Informações adicionais</h1>
    <p>Anote aqui as informações pertinentes, observadas no cliente após a entrevista.</p>

    <h2>Cadastar notas</h2>
    <a href="./adocao/formad.php">Adoção</a><br>
    <a href="./lar/formlar.php">Lar voluntário</a><br>

    <h2>Cadastar notas</h2>
    <a href="../listagem/adocao/listado.php">Listar adoção</a><br>
    <a href="../listagem/lar/listlar.php">Listar lar voluntário</a><br><br>


    <a href="../listagem/listagem.php">Voltar</a>


</body>
</html>