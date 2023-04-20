<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Inicio</title>
   
</head>
<body>


<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    if(!isset($_SESSION['id_user']))
    {
        die
        ("
        <button type='button'><a href='login.php'>CLIQUE AQUI PARA LOGAR </a></button></form></center>
        ");
    }
    
?>
</body><html>