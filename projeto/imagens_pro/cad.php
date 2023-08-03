<?php
	include_once("../conexaoBD.php");
	$tabela="imgpro";
	$id = "id_imgpro"; 
	$campo = "id_pro, img";

	//sessão para pegar o ID do produto
	if(!isset($_SESSION))
    {
        session_start();
    }
    $cod = $_SESSION['id_ip'];


    if(isset($_POST['Enviar']))
	{
		if(isset($_FILES['pic']))
		{
			$extensao = strtolower(substr($_FILES['pic']["name"],-4)); // extensão
			$novo_nome = date("Y.m.d-H.i.s").$extensao; //novo nome
			$diretorio = "../img_pro/"; //diretório
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
	<title>Upload de imagem</title>
</head>
<body>
	<h2>Insira imagens do produto selecionado</h2>
	<a href='../adm/produtos/produtos/cadastro/infos/pro.php'>Voltar</a><br>
	<a href='list.php'>Listagem imagens</a><br><br>

	<form action='' method='POST' enctype="multipart/form-data">
		<b><label for="pic"class="input-arquivo">Selecione a imagem</label></b>
		<input type="file" id="pic" name="pic" accept="image/*"></input><br>                        
        <input type="submit" value="Enviar" name="Enviar" class="button">
		
        </form>
</body>
</html>
	    