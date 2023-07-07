<?php
	include_once("../../../../conexaoBD.php");

    if(!isset($_SESSION))
    {
        session_start();
    }

    $id_imp = $_SESSION['codigo'];

    $sqlPesq = "SELECT img_pro FROM produto WHERE id_pro = $id_imp";
	$pesquisa = mysqli_query($conexao,$sqlPesq);
	
	if (!$pesquisa)
	{
        die(' Query Inválida: ' . mysqli_error($conexao));
		
	} 
    
    $arquivo = " ";
			
    $sql = "UPDATE produto SET 
			img_pro = '$arquivo' 
			WHERE id_pro = $id_imp";
            
	$instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
			
			
	if (!$instrucao) 
	{
		die(' Query Inválida: ' . mysqli_error($conexao));
		echo 'ERRO!';
	} 
	
    else 
	{
		mysqli_close($conexao);
        header ('location: ../listagem/pro.php');
		exit;

	}



		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/perfil.css" type="text/css">
	<title>Update de imagem</title>
</head>
<body>
    <h2>Cadastrar imagem padrão</h2>
	<a href='../../listagem/pro.php'>Voltar</a><br><br>

	<form action='' method='POST' enctype="multipart/form-data">
    <input type="hidden" name="codigo" value="<?= $cod;?>" />
		<b><label for="pic"class="input-arquivo">Selecione a imagem</label></b>
		<input type="file" id="pic" name="pic" accept="image/*"></input><br>                        
        <input type="submit" value="Cadastrar" name="Cadastrar" class="button">
		
        </form>
</body>
</html>
	    