<?php
	include_once("../../../../../conexaoBD.php");
	$tabela="tamanhos";
	$campos = "id_tam"; //chave primária
	
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