<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_user = $_SESSION['id_user']; 
    echo $id_user;
    
    include_once("../../../conexaoBD.php");

    
    
?>