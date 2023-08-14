<?php
	include_once("../../../conexaoBD.php");
	$tabela="descricao_vol";
	$campos = "id_descvol"; //chave primária
	
	$codigo = $_GET['codigo'];
	
	$sql = "DELETE FROM $tabela WHERE $campos='$codigo'";
	
	$instrucao = mysqli_query($conexao,$sql);
	
	if (!$instrucao) {
		die(' Query Inválida: ' . mysqli_error($conexao));

	} else {
		mysqli_close($conexao);
        header ('location:../page.html');
			
			exit;
	}