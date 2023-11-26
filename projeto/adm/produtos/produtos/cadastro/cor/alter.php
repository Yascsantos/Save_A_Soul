<?php
	include_once("../../../../../conexaoBD.php");
	$tabela="cores";
	$id = "id_cor"; 
    $pesq="cor";
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
		$cor = $_POST['cor'];
		
		$sql = "UPDATE $tabela SET 
			cor = '$cor' 
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
          <li> <a href="form.php"> Cadastrar + cores </a></li>
    <h1>Alteração de tamanho</h1>
    
    <form action="" method="post">
	<div class='input-dados'>
        <input type="hidden" name="codigo" value="<?= $edit;?>" />

        <label>Cor: </label> 
        <input type="text" placeholder="Cor" name="cor"><br>
        <input type="submit" name="alterar" value="Alterar tamanho">

    </form>

</div>
</main>


</body>
</html>