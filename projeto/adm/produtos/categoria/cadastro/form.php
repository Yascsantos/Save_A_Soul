<?php
    include_once("../../../../conexaoBD.php");
    $tabela="categoria";
    $campo="nome"; 

  if(isset($_POST['cadastrar']))
  {
    $nome = $_POST['nome'];
  }

  $sql = "INSERT INTO $tabela ($campo) VALUES ('$nome')";
		
	$instrucao = mysqli_query($conexao,$sql);
		
	if (!$instrucao) 
	{
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 
	else 
	{
		mysqli_close($conexao);
		header ('location: ../listagem/list.php');
		exit;
	}
?>