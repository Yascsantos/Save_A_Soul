<?php
        include_once("../../conexaoBD.php");

        if(!isset($_SESSION))
        {
            session_start();
        }
    
        $_SESSION['id_ani'] = $_GET['codigo']; //id_ani
        $id = $_SESSION['id_ani'];
    
        if($_GET['codigo'] == "" && $_GET['codigo'] == 0)
        {
    
        }  
        
        echo $id;
?>