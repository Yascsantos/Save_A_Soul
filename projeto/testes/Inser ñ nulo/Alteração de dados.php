<?php
/*Código que pega as informações do form e insere no banco de dados*/

/* --- MANIPULAÇÃO DOS DADOS DO FORM --- */
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
				rua = '$rua', 
				numero = '$numero' 
				WHERE $id = '$id_user'";
			var_dump($sql);
				
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