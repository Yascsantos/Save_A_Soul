<?php
    if(!isset($_SESSION))
    {
        session_start();
        
    }
	include_once("../../../../conexaoBD.php");
    $codigo = $_GET['codigo'];
    $data = $_SESSION['data'];
    $forma = "Mantimentos";
    $campos = "id_par, data, forma";


        
    $sql = "INSERT INTO doacao ($campos) 
    VALUES ('$codigo','$data','$forma')";

    $instrucao = mysqli_query($conexao,$sql);

    if (!$instrucao) 
    {
        die(' Query Inválida: ' . mysqli_error($conexao));

    }
    else
    {
        mysqli_close($conexao);
        header ('Location:../../../../index/ajude.php');
        exit;
    }
?>