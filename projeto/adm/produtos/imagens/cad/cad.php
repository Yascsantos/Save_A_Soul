<?php
	include_once("../../../../conexaoBD.php");
	$tabela="imgpro";
	$id = "id_imgpro"; 
	$edit = $_GET['codigo'];
	$campo = "id_pro, img";

    if(isset($_POST['Enviar']))
	{
		if(isset($_FILES['pic']))
		{
			$codigo = $_POST['codigo'];

			
			$extensao = strtolower(substr($_FILES['pic']["name"],-4)); // extensão
			$novo_nome = date("Y.m.d-H.i.s").$extensao; //novo nome
			$diretorio = "../img/"; //diretório
			$arquivo = $diretorio.$novo_nome;
			
			move_uploaded_file($_FILES['pic']["tmp_name"], $diretorio.$novo_nome); 
			
            $sql = "INSERT INTO $tabela ($campo) 
            VALUES ('$codigo','$arquivo')";
            
			$instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
			
			
			if (!$instrucao) 
			{
				die(' Query Inválida: ' . mysqli_error($conexao));
				echo 'Falha ao enviar arquivo!';
			} 
			else 
			{
				mysqli_close($conexao);
				echo "<h2>Imagem enviada com sucesso!</h2>";
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
	<form action='' method='POST' enctype="multipart/form-data">
	<input type="hidden" name="codigo" value="<?= $edit;?>" />

		<b><label for="pic"class="input-arquivo">Selecione o Arquivo</label></b>
		<input type="file" id="pic" name="pic" accept="image/*"></input>                        
        <input type="submit" value="Enviar" name="Enviar" class="button">
		
        </form>
</body>
</html>
	    