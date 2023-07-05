<?php
	include_once("../../../../conexaoBD.php");
	$tabela="produto";
	$campos = "id_pro"; //chave primária
	
	$codigo = $_GET['codigo'];
	
	$sql = "DELETE FROM $tabela WHERE $campos='$codigo'";
	
	$instrucao = mysqli_query($conexao,$sql);
	
	if (!$instrucao) {
		die(' Query Inválida: ' . mysqli_error($conexao));

	} else {
		mysqli_close($conexao);
			header ('location: ../listagem/pro.php');
			
			exit;
	}