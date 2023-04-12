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

    if(!isset($_SESSION['id']))
    {
        die
        (" <header><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR></header>
         <center><form>
        <h2 ><b>Tá doido, é? Cê nem logou ainda.<br> /:</b></h2> <br>
        <button type='button'><a href='../usuario/login/login.php'>CLIQUE AQUI PARA LOGAR </a></button></form></center>
        ");
    }
    
?>
</body><html>