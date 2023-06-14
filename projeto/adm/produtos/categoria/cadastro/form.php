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
		echo "A categoria foi cadastrada com sucesso <br> <br>";
		echo "<a href='../pg.html'>Voltar</a> <br>";
		echo "<a href='../listagem/list.php'>Listagem</a>";

		exit;
	}
?>