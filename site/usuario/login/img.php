<?php
    //inicar sessão
    if(!isset($_SESSION))
    {
        session_start();
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

    foreach ($instrucao as $exibe)
	{
        echo "<img src='".$exibe['foto']."'>";
        echo $exibe['foto'];
    }
?> 