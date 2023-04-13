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
        (" <h1>Você não estã logado. Logue para acessar nosso site =) <h1> 
        <button type='button'><a href='../usuario/login/login.php'>CLIQUE AQUI PARA LOGAR </a></button></form></center>
        ");
    }
    
?>
</body><html>