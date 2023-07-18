

<?php
    include_once("../../../../../conexaoBD.php");
    $tabela="tamanhos";
    $campo="id_pro, tamanho"; 

    if(!isset($_SESSION))
    {
        session_start();
    }
    $code = $_SESSION['code'];

  if(isset($_POST['cadastrar']))
  {
    $tam = $_POST['tam'];
  }

  $sql = "INSERT INTO $tabela ($campo) VALUES ('$code','$tam')";
		
  $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
		
	if (!$instrucao) 
	{
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 
	else 
	{
		mysqli_close($conexao);
		header ('location: ../../listagem/pro.php');
		exit;
	}
?>