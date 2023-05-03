<?php
//iniciação de sessão para trazer o ID 
    //iniciação de sessão
	if(!isset($_SESSION))
    {
        session_start();
    }

    //verificação de usuário existente ou não 
    if ($_SESSION['id_user'] == 0 or  $_SESSION['id_user'] == "")
    {
        header("Location: ../login/login.php");

    }

    //Conectando ao banco
	include_once("../../conexaoBD.php");

	//Tabela no BD
	$tabela="colaboradores";
    $campo= "id_user";
	$id= $_SESSION['id_user'];

	//Script de uma busca em uma tabela no Banco de Dados
	$sql = "select * from $tabela where $campo ='$id'";
	
	// executando instrução SQL
	$instrucao = mysqli_query($conexao,$sql);

/*Exibição dos valores vindo do DB pela query "SqlPesq"*/
	foreach ($instrucao as $exibe)
	{ 
		echo $exibe['usuario'];
	}
?>