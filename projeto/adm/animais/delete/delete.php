<?php
	include_once("../../../conexaoBD.php");
	$id = $_GET['codigo'];

	$sql = "DELETE FROM imgani WHERE id_ani ='$id'";
	
	$instrucao = mysqli_query($conexao,$sql);
	
	if (!$instrucao) {
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 
    else 
    {
		$sql_code = "DELETE FROM animal WHERE id_ani ='$id'";
		$pesquisa = mysqli_query($conexao,$sql_code);
		
		if (!$pesquisa) {
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} 
		else 
		{
			mysqli_close($conexao);
			header ('location: ../listagem/animais.php');
			exit;
		}


		mysqli_close($conexao);
		header ('location: ../listagem/animais.php');
		exit;
	}