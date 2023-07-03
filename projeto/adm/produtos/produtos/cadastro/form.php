<?php
    include_once("../../../../conexaoBD.php");
    $tabela="produto";
    $campo="nome"; 

  if(isset($_POST['cadastrar']))
  {
    $prod = $_POST['prod'];
    $preco = $_POST['preco'];
    $qtd = $_POST['qtd'];
    $tam = $_POST['tam'];
    $cor = $_POST['cor'];
    $mod = $_POST['mod'];
    $cap = $_POST['cap'];

    
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