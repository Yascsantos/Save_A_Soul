<?php
	include_once("../../../../../conexaoBD.php");
    $codigo = $_GET['codigo'];
    $data = date('Y-m-d');
    $forma = "Dinheiro";
    $campos = "id_par, data, forma, tipo";

    if(!isset($_SESSION))
    {
        session_start();
    }

    $type = $_SESSION['mensal'];
    $tipo = "$type";
        
    $sql = "INSERT INTO planos ($campos) 
    VALUES ('$codigo','$data','$forma','$tipo')";

    $instrucao = mysqli_query($conexao,$sql);

    if (!$instrucao) 
    {
        die(' Query Inválida: ' . mysqli_error($conexao));

    }
    else
    {
        mysqli_close($conexao);
        header ('Location:../../../../../index/ajude.php');
        exit;
    }
?>