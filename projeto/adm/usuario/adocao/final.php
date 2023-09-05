<?php
        include_once("../../../conexaoBD.php");
        //id_user
        if(!isset($_SESSION))
        {
            session_start();
        }
        $id = $_SESSION['codigo'];

    echo "Funcionou";
    echo $id;
?>