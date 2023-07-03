<?php
	if(!isset($_SESSION))
    {
        session_start();
    }

	include_once('../../conexaoBD.php');
	$tabela="user";
	$campos = "foto";
	$id = "id_user";  
	$id_user = $_SESSION['id_user'];



	if(isset($_POST['Enviar']))
	{
		if(isset($_FILES['pic']))
		{
			$titulo = $_POST['titulo'];
			
			$extensao = strtolower(substr($_FILES['pic']["name"],-4)); // extensão
			$novo_nome = $titulo.$extensao; //novo nome
			$diretorio = "./img/"; //diretório
			$arquivo = $diretorio.$novo_nome;
			
			move_uploaded_file($_FILES['pic']["tmp_name"], $diretorio.$novo_nome); 
			
			$sql= "UPDATE $tabela SET $campos = '$arquivo' WHERE $id = '$id_user'";
			
			$instrucao = mysqli_query($conexao,$sql);
			
			if (!$instrucao) 
			{
				die(' Query Inválida: ' . mysqli_error($conexao));
				echo 'Falha ao enviar arquivo!';
			} 
			else 
			{
				mysqli_close($conexao);
				echo "Imagen enviada com sucesso!";
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
	<title>Update de imagem</title>
</head>
<body>
	<form action='' method='POST' enctype="multipart/form-data">
        <label>Título: </label></b>
        <input type="text" name="titulo"> </input><br>
		<input type="file" name="pic" accept="image/*"></input>
         <br><br>                           
        <input type="submit" value="Enviar" name="Enviar"></button>
        </form>
</body>
</html>
	    