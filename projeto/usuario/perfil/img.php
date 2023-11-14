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
			$extensao = strtolower(substr($_FILES['pic']["name"],-4)); // extensão
			$novo_nome = date("Y.m.d-H.i.s").$extensao; //novo nome
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
				echo "<h2 style='
				@import url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200');
				@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,200;1,300&family=Righteous&display=swap');
				font-family:'Poppins';'>Imagem enviada com sucesso!</h2>";
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
<style>
	@import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,200;1,300&family=Righteous&display=swap');
  button{
    width: 20%;
    height: 30px;
    background:   #474845;
    margin-top: 10px;
    color: white;
    margin-left: 10%;
    font-size: 13px;
    font-family: "Poppins";
  }
  input[type='file'] {
    display: none;
    
  }

  .input-arquivo{
    display: inline-block;
    padding: 10px 15px;
    background-color: #e9e9e9;
    color: #333;
    border: none;
    border-radius: 4px;
    text-align: center;
    font-size: 13px;
    font-family: "Poppins";
  }
  
  .input-arquivo:hover {
    background-color: #dcdcdc;
  }
  
  .input-arquivo:focus {
    outline: none;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
  }
 
</style>
<body>
	<form action='' method='POST' enctype="multipart/form-data">
		<b><label for="pic"class="input-arquivo">Selecionar Arquivo</label></b>
		<input type="file" id="pic" name="pic" accept="image/*"></input>                        
        <button input type="submit" value="Enviar" name="Enviar">Enviar</button>
		
        </form>
</body>
</html>
	    