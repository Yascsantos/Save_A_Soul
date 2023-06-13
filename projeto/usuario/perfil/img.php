<?php
	if(!isset($_SESSION))
    {
        session_start();
    }

	include_once('../../conexaoBD.php');
	$tabela="user";
	$campos = "foto";
	$diretorio = "../img"; 

	$id = "id_user";  
	$id_user = $_SESSION['id_user'];


	if(isset($_POST['enviar'])){
		$titulo = $_POST['titulo'];
		
		$extensao = strtolower(substr($_FILES['arquivo']["name"], -4));
		
		$novo_nome = $titulo .$extensao; 
		$arquivo = $diretorio.$novo_nome;
		
		move_uploaded_file($_FILES['arquivo']["tmp_name"], $arquivo); 
		
		$sql= "UPDATE $tabela SET foto = '$arquivo' WHERE $id = '$id_user'";
		
		$instrucao = mysqli_query($conexao,$sql);
		
		if (!$instrucao) 
		{
			die(' Query Inválida: ' . mysqli_error($conexao));
			echo 'Falha ao enviar arquivo!';
		} 
		else 
		{
			mysqli_close($conexao);
			echo '<div class="msg"><p>Sucesso!</p></div>';
			exit;

		}	
	}
	
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Manipulando arquivos</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/perfil.css" type="text/css">
	</head>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,200;1,300&family=Righteous&display=swap');
form{
	height: 100px;
	background-color: rgba(255, 255, 255, 0.4);
    backdrop-filter: blur(40px);
    border-radius: 0 20px 20px 0;
    
}
	 label{
		font-family:'Poppins';
	 }
.input-text{
  width: 20%;
  height: 15px;
  background-color: rgba(255, 255, 255, 0.32);
  border-radius: 20px;
  outline: none;
  border: 2px solid transparent;
  color: #616161;
  transition: all 0.4s ease;
  }
.input-arq{
  width: 55%;
  height: 20px;
  border-radius: 10px;
  background-color: rgba(255, 255, 255, 0.32);
  color:black;
  outline: none;
  font-family:'Poppins';
}
.enviar{
	background:#180f1f;
  width: 20%;
  height: 25px;
  border-radius: 20px;
  outline: none;
  border: none;
  margin-top: 15px;
  color: white;
 margin-left: 20%;
  font-size: 14px;
}
.apagar{
	background:#180f1f;
  width: 20%;
  height: 25px;
  border-radius: 20px;
  outline: none;
  border: none;
  margin-top: 15px;
  color: white;
 margin-left: 20%;
  font-size: 14px;
}

	  </style>
	<body>
		<form action="img.php" method="POST" enctype="multipart/form-data">
			<br>
			<b><label>Título: </label></b>
			<input type="text" name="titulo" required class="input-text"/>
			<input type="file" name="arquivo" size="45" class="input-arq">
			
			<button type="submit" value="Enviar" name="enviar" class="enviar">Enviar</button>
			<button type="reset" value="Apagar" class="apagar">Apagar</button>
		</form>
		
	</body>
</html>

