<?php
	include_once("../conexaoBD.php");
	$tabela="imgani";
	$id = "id_imgani"; 
	$campo = "id_ani, img";

	//sessão para pegar o ID do produto
	if(!isset($_SESSION))
    {
        session_start();
    }
    $cod = $_SESSION['id_imgani'];
 


    if(isset($_POST['Enviar']))
	{
		if(isset($_FILES['pic']))
		{
			$extensao = strtolower(substr($_FILES['pic']["name"],-4)); // extensão
			$novo_nome = date("Y.m.d-H.i.s").$extensao; //novo nome
			$diretorio = "../img_ani/"; //diretório
			$arquivo = $diretorio.$novo_nome;
			
			move_uploaded_file($_FILES['pic']["tmp_name"], $diretorio.$novo_nome); 
			
            $sql = "INSERT INTO $tabela ($campo) 
            VALUES ('$cod','$arquivo')";
            
			$instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
			
			
				
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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Upload de imagem</title>
	<style>
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
 
 
form{
    background-color:white;
}
</style>
</head>
<body>
	<form action='' method='POST' enctype="multipart/form-data">
		<b><label for="pic"class="input-arquivo">Selecione a imagem</label></b>
		<input type="file" id="pic" name="pic" accept="image/*"></input>                       
		<button input type="submit" value="Enviar" name="Enviar">Enviar</button>
		
        </form>
</body>
</html>
	    