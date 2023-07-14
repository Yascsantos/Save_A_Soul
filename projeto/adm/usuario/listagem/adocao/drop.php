<?php
	include_once("../../../../conexaoBD.php");
	$tabela="descricao_ado";
	$campos = "id_descad"; //chave primária
	
	$codigo = $_GET['codigo'];
	
	$sql = "DELETE FROM $tabela WHERE $campos='$codigo'";
	
	$instrucao = mysqli_query($conexao,$sql);
	
	if (!$instrucao) {
		die(' Query Inválida: ' . mysqli_error($conexao));

	} else {
		mysqli_close($conexao);
        header ('location: ../../descricao/page.php?&codigo=0');
			
			exit;
	}