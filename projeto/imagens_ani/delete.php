<?php
	include_once("../conexaoBD.php");
	$tabela="imgani";
	$campos = "id_imgani"; //chave primária
	
	$codigo = $_GET['codigo'];
	
	$sql = "DELETE FROM $tabela WHERE $campos='$codigo'";
	
	$instrucao = mysqli_query($conexao,$sql);
	
	if (!$instrucao) {
		die(' Query Inválida: ' . mysqli_error($conexao));

	} else {
		mysqli_close($conexao);
			header ('location: list.php');
			
			exit;
	}