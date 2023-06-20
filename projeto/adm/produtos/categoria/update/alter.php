<?php
	include_once("../../../../conexaoBD.php");
	$tabela="categoria";
	$id = "id_cat"; 
    $pesq="nome";
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
			nome = '$nome' 
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
    <title>Alteração da categoria</title>
</head>
<body>
    <h1>Cadastro de categorias</h1>
    <form action="" method="post">
        <input type="hidden" name="codigo" value="<?= $edit;?>" />

        <label>Categoria: </label> <br>
        <input type="text" placeholder="Mude a categoria" name="nome">
        <input type="submit" name="alterar" value="Alterar categoria">
    </form>


</body>
</html>