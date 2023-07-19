<?php
	include_once("../../../../../conexaoBD.php");
	$tabela="tamanhos";
	$id = "id_tam"; 
    $pesq="tamanho";
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
		$tam = $_POST['tam'];
		
		$sql = "UPDATE $tabela SET 
			tamanho = '$tam' 
			WHERE $id = $codigo";
			
		$instrucao = mysqli_query($conexao,$sql);
		
		if (!$instrucao) 
        {
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} 
        else 
        {
			mysqli_close($conexao);
            header ('location: list.php');

			exit;
		}
	}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=c">
    <title>Alteração de tamanho</title>
</head>
<body>
    <h1>Alteração de tamanho</h1>
    <form action="" method="post">
        <input type="hidden" name="codigo" value="<?= $edit;?>" />

        <label>Tamanho: </label> 
        <input type="text" placeholder="Tamanho" name="tam"><br>
        <input type="submit" name="alterar" value="Alterar tamanho">
    </form>


</body>
</html>