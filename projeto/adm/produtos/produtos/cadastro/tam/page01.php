<?php
    	if(!isset($_SESSION))
        {
            session_start();
        }
        $_SESSION['code'] = $_GET['codigo'];    
        $code = $_SESSION['code'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../../css/style.css">
    <title>Tamanhos</title>
</head>
<body>
<main>
        <div class="caixa">
            <div class='espaco'></div>
              <div class="caixa-dados">
    <h1>Tamanhos</h1>
    <a href="form.php">Cadastrar tamanhos</a><br>
    <a href="list.php">Listar tamanhos</a><br><br>
    <a href="../pro.php">Voltar</a><br>

    
</div>

</div>
</main>
    
</body>
</html>