

<?php
    include_once("../../../../../conexaoBD.php");
    $tabela="tamanhos";
    $campo="id_pro, tamanho"; 

    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_pro = $_SESSION['id_pro'];

  if(isset($_POST['cadastrar']))
  {
    $tam = $_POST['tam'];
  }

  $sql = "INSERT INTO $tabela ($campo) VALUES ('$id_pro','$tam')";
		
  $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
		
	if (!$instrucao) 
	{
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 
	else 
	{
		mysqli_close($conexao);
		header ('location: ../img_padrao/cad_img.php');
		exit;
	}
?>