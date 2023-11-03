<?php
	include_once("../../../conexaoBD.php");
	$id = $_GET['codigo'];

	$sql_01 = "DELETE FROM imgani WHERE id_ani ='$id'";
	$inst_01 = mysqli_query($conexao,$sql_01);
	if (!$inst_01) 
	{
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 

	$sql_02 = "DELETE FROM voluntario WHERE id_ani ='$id'";
	$inst_02 = mysqli_query($conexao,$sql_02);
	if (!$inst_02) 
	{
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 

	$sql_03 = "DELETE FROM adocao WHERE id_ani ='$id'";
	$inst_03 = mysqli_query($conexao,$sql_03);
	if (!$inst_03) 
	{
		die(' Query Inválida: ' . mysqli_error($conexao));

	}


	$sql_code = "DELETE FROM animal WHERE id_ani ='$id'";
	$pesquisa = mysqli_query($conexao,$sql_code);
	
	if (!$pesquisa) 
	{
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
