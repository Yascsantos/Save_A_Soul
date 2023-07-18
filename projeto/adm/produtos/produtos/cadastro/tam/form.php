<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=c">
    <title>Cadastro de tamanhos</title>
</head>
<body>
    <h2>Cadastro de tamanhos</h2>
    <a href="../../pg.html">Voltar</a> <br>
    <a href="../../listagem/list.php">Listar categorias</a><br><br>

    <form action="cad_tam.php" method="post">
        <label>Tamanho: </label> 
        <input type="text" placeholder="Tamanho" name="tam"><br>
        <button input type="submit" name="cadastrar" value="cadastrar">Cadastrar</button>
    </form>
</body>
</html>

<?php
    	if(!isset($_SESSION))
        {
            session_start();
        }
        $_SESSION['code'] = $_GET['codigo'];    
        $code = $_SESSION['code'];
?>