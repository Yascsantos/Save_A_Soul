<!--Parte em php-->
<?php
	//iniciação de sessão para trás o ID para a alteração
	if(!isset($_SESSION))
		{
			session_start();
		}
	
	include_once("../../../conexaoBD.php"); //Conectando ao banco
	$tabela="colaboradores"; //Tabela no BD
	$id = "id_user"; //chave primaria 
	
	$edit = $_SESSION['id-_user']; //código e/ou id vindo do formulário anterior 
	
	/*$pesq = "usuario, nome, email, telefone, senha, foto, cep, pais,
    estado, cidade, rua, bairro, numero";*/	//Pesquisa o(s) campo(s) a ser(em) alterado(s) no banco
	
	//busca de valores para alterar 
	$sqlPesq = "SELECT * FROM $tabela WHERE $id= $edit";
	
	//executa, testa e encerra conexão
	$pesquisa = mysqli_query($conexao,$sqlPesq);
	if (!$pesquisa) 
		{
			die(' Query Inválida: ' . mysqli_error($conexao));
		} 
	
	//se o botão for pressionado
	if (isset($_GET['alterar'])) 
	{

		//traz as variáveis do formulário
		$codigo = $_SESSION['id'];
		$email = $_GET['email'];
		
		//Script para atualizar um registro na tabela no Banco de Dados
		$sql = "UPDATE $tabela SET 
			email = '$email'
			WHERE $campos = $codigo";
			
		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
		//concluindo operação
		if (!$instrucao) {
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} else {
			mysqli_close($conexao);
			echo "E-mail alterado com sucesso";
			echo "<br/><a href='../perfil.php'>Voltar</a><br/>";

			exit;
		}
	}

?>