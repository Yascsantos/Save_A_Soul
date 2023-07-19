<?php
	include_once("../../../../conexaoBD.php");
	if(!isset($_SESSION))
    {
        session_start();
    }

    $_SESSION['id_pro'] = $_GET['codigo'];
	$id = $_SESSION['id_pro'];

	$sql = "DELETE FROM imgpro WHERE id_pro ='$id'";
	
	$instrucao = mysqli_query($conexao,$sql);
	
	if (!$instrucao) {
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 
    else 
    {
		$sql_code = "DELETE FROM produto WHERE id_pro ='$id'";
		$pesquisa = mysqli_query($conexao,$sql_code);
		
		if (!$pesquisa) {
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} 
		else 
		{
			mysqli_close($conexao);
			header ('location: ../cadastro/pro.php');
			exit;
		}


		mysqli_close($conexao);
		header ('location: ../cadastro/pro.php');
		exit;
	}