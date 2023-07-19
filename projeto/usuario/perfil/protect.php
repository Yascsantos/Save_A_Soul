<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    if(!isset($_SESSION['id_user']))
    {
        //header("Location:../login/login.php");
        die
        (" <h2 ><b>Logue para acessar seu perfil<br></b></h2> <br>
        <button type='button'><a href='../login/login.php'>CLIQUE AQUI PARA LOGAR </a></button></form></center>
        ");
    }
    
?>