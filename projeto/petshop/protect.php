<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    if(!isset($_SESSION['id_user']))
    {
        die
        (" <h2 ><b>Logue para acessar o pet shop<br></b></h2> <br>
        <button type='button'><a href='../usuario/login/login.php'>CLIQUE AQUI PARA LOGAR </a></button></form></center>
        ");
    }
    
?>