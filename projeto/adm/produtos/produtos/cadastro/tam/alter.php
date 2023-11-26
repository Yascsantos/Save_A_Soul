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
	<link rel="stylesheet" href="../../../../css/style.css">
    <title>Alteração de tamanho</title>
</head>

<body>

<main>
<div class="encontro">
<a href="../infos/pro.php"> Voltar </a> </li>
        <a href=".././listagem/list.php">Listar categorias</a>
      
    <h3>Alteração de tamanho</h3>
    <form action="" method="post">
	<div class='input-dados'>
        <input type="hidden" name="codigo" value="<?= $edit;?>" />

        <label>Tamanho: </label> 
        <input type="text" placeholder="Tamanho" name="tam"><br>
        <button input type="submit" name="alterar" value="Alterar tamanho">Alterar</button>
		</div>
    </form>
</div>
</main>
</body>
</html>