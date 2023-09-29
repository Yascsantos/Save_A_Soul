<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
            
    $_SESSION['id_par'] = $par;

    echo $par; 
    
?>