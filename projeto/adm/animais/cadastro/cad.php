<?php
	include_once("../../../conexaoBD.php");
	$tabela="animais";
	$campos = "nome, historia";

    if (isset($_POST['cadastrar'])) 
	{
        $nome = $_POST['nome'];
        $hist = $_POST['hist'];
    }

    $sql = "INSERT INTO $tabela ($campos) VALUES ('$nome','$hist')";

    $instrucao = mysqli_query($conexao,$sql);

    if (!$instrucao) 
    {
        die(' Query Inválida: ' . mysqli_error($conexao));

    } 
    else 
    {
        mysqli_close($conexao);
        header ('Location:../login/login.php');
        exit;
    }
    


?>