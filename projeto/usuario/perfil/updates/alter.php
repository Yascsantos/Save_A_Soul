<?php
//iniciação de sessão para trazer o ID 
	if(!isset($_SESSION))
		{
			session_start();
		}

//Conectando ao banco		
	include_once("../../../conexaoBD.php"); 

	$tabela="colaboradores"; //Tabela no BD
	$id = "id_user"; //chave primaria
	$id_user = $_SESSION['id_user'];  //código e/ou id vindo de uma sessão

//busca de valores do DB
	$sqlPesq = "SELECT nome FROM $tabela WHERE $id= $id_user";

	$pesquisa = mysqli_query($conexao,$sqlPesq);

	//testando conexão
	if (!$pesquisa) 
		{
			die(' Query Inválida: ' . mysqli_error($conexao));
		} 





?>