<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>retira</title>
</head>
<body>
</body>
</html>
<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_user = $_SESSION['id_user']; 
    
    include_once("../../conexaoBD.php");

 
    if(isset($_POST['retira']))
    {   
        header ('location:../../adm/produtos/produtos/listagem/notas/retira/retira.php');

    }

    
?>