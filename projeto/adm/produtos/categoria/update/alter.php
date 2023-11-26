<?php
	include_once("../../../../conexaoBD.php");
	$tabela="categoria";
	$id = "id_cat"; 
    $pesq="nome_cat";
	$edit = $_GET['codigo'];

		
    $sqlPesq = "SELECT $pesq FROM $tabela WHERE $id= $edit";
	$pesquisa = mysqli_query($conexao,$sqlPesq);
	
	if (!$pesquisa)
	{
        die(' Query Inválida: ' . mysqli_error($conexao));
		
	} 
	
	if (isset($_POST['alterar'])) 
    {
		$codigo = $_POST['codigo'];
		$nome = $_POST['nome'];
		
		$sql = "UPDATE $tabela SET 
			nome_cat = '$nome' 
			WHERE $id = $codigo";
			
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
	}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=c">
	<link rel="stylesheet" href="../../../css/style.css">
    <title>Alteração da categoria</title>
</head>

<body>
<main>
        <div class="encontro">
    <h1>Cadastro de categorias</h1>
    <form action="" method="post">
        <input type="hidden" name="codigo" value="<?= $edit;?>" />
<div class='input-dados'>
        <label>Categoria: </label> <br>
        <input type="text" placeholder="Mude a categoria" name="nome"><br>
        <input type="submit" name="alterar" value="Alterar categoria"></div>
    </form>
	</div>
</main>

</body>
</html>