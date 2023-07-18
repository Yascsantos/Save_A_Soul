<?php
    include_once("../../../../conexaoBD.php");
    $tabela="produto";
    $campo= "id_cat, prod, preco, qtd, modelo, outros"; 

  if(isset($_POST['cadastrar']))
  {
    $cat = $_POST['cat'];
    $prod = $_POST['prod'];
    $preco = $_POST['preco'];
    $qtd = $_POST['qtd'];
    $mod = $_POST['mod'];
    $out = $_POST['out'];

    
  }

  $sql = "INSERT INTO $tabela ($campo) 
            VALUES ('$cat','$prod','$preco', '$qtd', '$mod', '$out')";
		
	$instrucao = mysqli_query($conexao,$sql);
		
	if (!$instrucao) 
	{
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 
	else 
	{
		mysqli_close($conexao);
		header ('location:../pg02.html');
		exit;
	}
?>