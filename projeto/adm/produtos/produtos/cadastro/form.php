<?php
    include_once("../../../../conexaoBD.php");
    $tabela="produto";
    $campo= "id_cat, prod, preco, qtd, tamanho, cor, modelo, capacidade "; 

  if(isset($_POST['cadastrar']))
  {
    $cat = $_POST['cat'];
    $prod = $_POST['prod'];
    $preco = $_POST['preco'];
    $qtd = $_POST['qtd'];
    $tam = $_POST['tam'];
    $cor = $_POST['cor'];
    $mod = $_POST['mod'];
    $cap = $_POST['cap'];

    
  }

  $sql = "INSERT INTO $tabela ($campo) 
            VALUES ('$cat','$prod','$preco', '$qtd', '$tam', '$cor', '$mod', '$cap')";
		
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