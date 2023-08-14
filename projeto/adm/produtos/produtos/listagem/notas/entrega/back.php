<?php
	include_once("../../../../../../conexaoBD.php");
    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_user = $_SESSION['id_user']; 

	$sql = "DELETE FROM pedido WHERE id_user ='$id_user'";
	$instrucao = mysqli_query($conexao,$sql);
	
	if (!$instrucao) {
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 
	else {
		mysqli_close($conexao);
			header ('location: ../../../../../../index/index.php');
			
			exit;
	}