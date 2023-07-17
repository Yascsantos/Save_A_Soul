<?php
    include_once("../../../conexaoBD.php");
    $tabela="animal";
    $campo= "nome_ani, raca, porte, sexo"; 

  if(isset($_POST['cadastrar']))
  {
    $nome = $_POST['nome'];
    $raca = $_POST['raca'];
    $porte = $_POST['porte'];
    $sx = $_POST['sx'];

    
  }

    $sql = "INSERT INTO $tabela ($campo) 
            VALUES ('$nome','$raca','$porte', '$sx')";
		
    $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
		
	if (!$instrucao) 
	{
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 
	else 
	{
		mysqli_close($conexao);
		header ('location:../listagem/animais.php');
		exit;
	}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 6019948347ffb6de4c0f820bf4cc1f238c715f99
