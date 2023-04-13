<?php
	//parametros pra conexão 
	$servidor = "localhost";
	$bd = "amora"; //banco de dados
	$usuario = "root";
	$senha = ""; 
	
	//criando conexao
	$conexao = mysqli_connect($servidor, $usuario, $senha, $bd); //conexão com o banco
	
	//checando conexao
	if (!$conexao){
		die ("Não foi possivel efetuar a conexão".mysqli_connect_error());
	}
	else{
        /*Verificação de conexão
		echo "Conexão efetuada <br>";
		mysqli_close($conexao);
        */
	}
?>