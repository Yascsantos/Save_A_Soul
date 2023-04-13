<?php
	//Conectando ao banco
	include_once("../../conexaoBD.php");
	//Tabela no BD
	$tabela="colaboradores";
	//define campos do insert
	$campos = "usuario, nome, email, telefone, senha, foto, cep, pais,
    estado, cidade, rua, bairro, numero";

	//diretório da imagem de perfil
	$diretorio = "../img/";
	$arq= "padrao.png"; 

	
	//se o botão for pressionado
	if (isset($_POST['cadastrar'])) {
		//traz as variáveis do formulário
        $usuario = $_POST['usuario'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
        $tel = $_POST['telefone'];
        $senha = $_POST['senha'];
        $cep = $_POST['cep'];
        $pais = $_POST['pais'];
        $estado = $_POST['estado'];
		$cidade = $_POST['cidade'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $numero = $_POST['numero'];
	

		$arquivo = $diretorio.$arq; //arquivo = pasta + nome do arquivo 		
		
		//Script para inserir um registro na tabela no Banco de Dados
		$sql = "INSERT INTO $tabela ($campos) 
			VALUES ('$usuario','$nome','$email','$tel','$senha','$arquivo', '$cep','$pais',
            '$estado','$cidade','$rua','$bairro','$numero')";
		
		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
		//concluindo operação
		if (!$instrucao) 
		{
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} 
		else {
			mysqli_close($conexao);
			header ('Location:../login/login.php');
			exit;
		}
	}	
?>