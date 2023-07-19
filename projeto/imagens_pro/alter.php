<?php
	include_once("../conexaoBD.php");
	$tabela="imgpro";
	$id = "id_imgpro"; 
    $pesq="id_pro, img";
	$edit = $_GET['codigo'];

		
    $sqlPesq = "SELECT $pesq FROM $tabela WHERE $id= $edit";
	$pesquisa = mysqli_query($conexao,$sqlPesq);
	
	if (!$pesquisa)
	{
        die(' Query Inválida: ' . mysqli_error($conexao));
		
	} 
	
	if (isset($_POST['Alterar'])) 
    {
        $codigo = $_POST['codigo'];

        if(isset($_FILES['pic']))
		{
			$extensao = strtolower(substr($_FILES['pic']["name"],-4)); // extensão
			$novo_nome = date("Y.m.d-H.i.s").$extensao; //novo nome
			$diretorio = "../img_pro/"; //diretório
			$arquivo = $diretorio.$novo_nome;
			
			move_uploaded_file($_FILES['pic']["tmp_name"], $diretorio.$novo_nome); 
			
            $sql = "UPDATE $tabela SET 
			img = '$arquivo' 
			WHERE $id = $codigo";
            
			$instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
			
			
			if (!$instrucao) 
			{
				die(' Query Inválida: ' . mysqli_error($conexao));
				echo 'Falha ao enviar arquivo!';
			} 
			else 
			{
				mysqli_close($conexao);
				header ('location: list.php');
				exit;

			}
		}
		
		else 
		{
			echo "Arquivo inexistente";
		}
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
    <h2>Alterar imagem do produto</h2>
	<a href='../adm/produtos/produtos/cadastro/pro.php'>Voltar</a><br>
	<a href='list.php'>Listagem imagens</a><br><br>
	
	<form action='' method='POST' enctype="multipart/form-data">
    <input type="hidden" name="codigo" value="<?= $edit;?>" />
		<b><label for="pic"class="input-arquivo">Selecione a imagem</label></b>
		<input type="file" id="pic" name="pic" accept="image/*"></input><br>                        
        <input type="submit" value="Alterar" name="Alterar" class="button">
		
        </form>
</body>
</html>
	    