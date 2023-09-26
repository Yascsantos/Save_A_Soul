<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entega</title>
</head>
<body>
    <h2>Escolha a forma de pagamento</h2>
</body>
</html>
<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_user = $_SESSION['id_user']; 
    
    include_once("../../conexaoBD.php");
   
    if(isset($_POST['entrega']))
    {
        echo "
       
        ";    
        
    }
 
    if(isset($_POST['conf']))
    {   
        header ('location:../../adm/produtos/produtos/listagem/notas/entrega/entrega.php');

    }

    
?>