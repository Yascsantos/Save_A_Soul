<?php
/*
	Verificação para ver se o campo do form está vazio. Não deu certo pq não tinha os valores para inserir no lugar do campo vazio 
	(descrevi esse problema no notion (TCC, Problemas, Insern ñ nulo).
*/
			//usuário
			if (empty($usuario)) 
			{ 
				$sqlPesq['usuario'] = $usuario;
			} 
			
			//nome
			if (empty($nome)) 
			{ 
				$sqlPesq['nome'] = $nome;
			}
			
			//email 
			if (empty($email)) 
			{
				$sqlPesq['email'] = $email;
			}
			
			//telefone 
			if (empty($sqlPesq['telefone'])) 
			{
				$sqlPesq['telefone'] = $tel;
			}
?>