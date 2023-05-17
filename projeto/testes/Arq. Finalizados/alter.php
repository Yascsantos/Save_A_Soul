<?php
	//iniciação de sessão para trás o ID para a alteração
	if(!isset($_SESSION))
		{
			session_start();
		}

	include_once("../../../conexaoBD.php"); //Conectando ao banco
	$tabela="colaboradores"; //Tabela no BD
	$id = "id_user"; //chave primaria 

	$id_user = $_SESSION['id_user']; //código e/ou id vindo do formulário anterior 

	
	//busca de valores para alterar 
	$sqlPesq = "SELECT * FROM $tabela WHERE $id= $id_user";

	//executa, testa e encerra conexão
	$pesquisa = mysqli_query($conexao,$sqlPesq);

	if (!$pesquisa) 
		{
			die(' Query Inválida: ' . mysqli_error($conexao));
		} 

	//quando o botão for pressionado
	if (isset($_POST['alterar'])) 
	{
		//dados vindos do formulário de alteração
			$usuario = $_POST['usuario'];
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$tel = $_POST['telefone'];
			$cep = $_POST['cep'];
			$pais = $_POST['pais'];
			$estado = $_POST['estado'];
			$cidade = $_POST['cidade'];
			$rua = $_POST['rua'];
			$bairro = $_POST['bairro'];
			$numero = $_POST['numero'];


/* --- ATUALIZAÇÃO --- */
	//Script para atualizar um registro na tabela no Banco de Dados
		$sql = "UPDATE $tabela SET 
			usuario = '$usuario', 
			nome = '$nome',
			email = '$email', 
			telefone = '$tel', 
			cep = '$cep', 
			pais = '$pais', 
			estado = '$estado', 
			cidade = '$cidade', 
			bairro = '$bairro', 
			rua = '$rua', 
			numero = '$numero' 
			WHERE $id = '$id_user'";
			
	// executando instrução SQL para anterar os dados 
		$instrucao = mysqli_query($conexao,$sql);

/* --- CONCLUSÃO DO ALTER --- */

	//concluindo operação
		if ($instrucao) 
		{
			mysqli_close($conexao);
			header ('Location:../perfil.php');
			exit;
	
		} 
		else 
		{
			die(' Query Inválida: ' . mysqli_error($conexao));
		}
	}
?>