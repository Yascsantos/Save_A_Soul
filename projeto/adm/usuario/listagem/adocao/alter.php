<?php
	include_once("../../../../conexaoBD.php");
	$tabela="descricao_ado";
	$id = "id_descad"; 
    $pesq="texto";
	$edit = $_GET['codigo'];
    echo $edit;

		
    $sqlPesq = "SELECT $pesq FROM $tabela WHERE $id= $edit";
	$pesquisa = mysqli_query($conexao,$sqlPesq);
	
	if (!$pesquisa)
	{
        die(' Query Inválida: ' . mysqli_error($conexao));
		
	} 
	
	if (isset($_POST['alterar'])) 
    {
		$codigo = $_POST['codigo'];
		$texto = $_POST['texto'];
		
		$sql = "UPDATE $tabela SET 
			texto = '$texto' 
			WHERE $id = $codigo";
			
		$instrucao = mysqli_query($conexao,$sql);
		
		if (!$instrucao) 
        {
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} 
        else 
        {
			mysqli_close($conexao);
            header ('location: ../listagem.php');

			exit;
		}
	}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=c">
    <title>Alteração de notas</title>
</head>
<body>
    <h1>Alteração de notas</h1>
    <form action="" method="post">
        <input type="hidden" name="codigo" value="<?= $edit;?>" />

        <label>Notas: </label> <br>
        <input type="text"  name="texto">
        <input type="submit" name="alterar" placeholder="<?foreach($pesquisa as $exibe){echo $exibe['texto']}?>" value="Alterar categoria">
    </form>


</body>
</html>