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
	if (isset($_POST['cadastrar'])) 
	{
		//traz as variáveis do formulário
        $usuario = $_POST['usuario'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
        $tel = $_POST['telefone'];
        $senha = $_POST['senha'];
		$confirma = $_POST['confirma'];
        $cep = $_POST['cep'];
        $pais = $_POST['pais'];
        $estado = $_POST['estado'];
		$cidade = $_POST['cidade'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $numero = $_POST['numero'];
	

		$arquivo = $diretorio.$arq; //arquivo = pasta + nome do arquivo 		
		
		//verificação de senha
		if ( $senha == $confirma)
		{
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
			else 
			{
				mysqli_close($conexao);
				header ('Location:../login/login.php');
				exit;
			}
		}
		
		else 
		{
			echo "<!DOCTYPE html>
			<html lang='pt-br'>
			<head>
				<title>erro</title>
			</head>
			<style>
			@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
			*{
				padding: 0;
				margin: 0;
				box-sizing: border-box;
				font-family: 'Poppins', sans-serif;
			}
			.caixa-dados p a{
				color: hsl(258, 46%, 75%);
				text-decoration: none;
			}
			
			main.erro {
				background-color: rgba(0, 0, 0, 0.986);
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%,-50%);
				min-width: 320px;
				min-height: 20vh;
				padding: 2rem;
				border-radius: 8px;
				color:red;
				text-align: center;
			}
			.erro img{
				width: 100px;
				height: 8vh;
			
			}
			
			</style>
			<body>
			<main class='erro'>";
			echo "<h3>Senhas diferentes, por favor digite a mesma senha em ambos os campos<h3>";
			echo "<img src='./imgs/atenção.png'>
			<p><a href='../cadastro/cadastro.html'>VOLTAR</a></p>   </main>
					</body>  </html>";
		}


	}



?>