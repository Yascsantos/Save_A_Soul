<?php
	include_once("../../../../conexaoBD.php");

    $codigo = $_GET['codigo'];


	$sql = "DELETE FROM produto WHERE id_cat ='$codigo'";
	
	$instrucao = mysqli_query($conexao,$sql);
	
	if (!$instrucao) {
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 
    else 
    {
		$sql_code = "DELETE FROM categoria WHERE id_cat ='$codigo'";
		$pesquisa = mysqli_query($conexao,$sql_code);
		
		if (!$pesquisa) {
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} 
		else 
		{
			
			mysqli_close($conexao);
			header ('location: ../listagem/list.php');
			exit;
		}


		mysqli_close($conexao);
		header ('location: ../listagem/list.php');
		exit;
	}