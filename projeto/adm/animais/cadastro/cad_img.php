<?php
	include_once("../../../conexaoBD.php");

    if(!isset($_SESSION))
    {
        session_start();
    }

    $id_ani = $_SESSION['codigo'];

    $sqlPesq = "SELECT img_ani FROM animal WHERE id_ani = $id_ani";
	$pesquisa = mysqli_query($conexao,$sqlPesq);
	
	if (!$pesquisa)
	{
        die(' Query Inválida: ' . mysqli_error($conexao));
		
	} 
	
	if (isset($_POST['Cadastrar'])) 
    {
        $codigo = $_POST['codigo'];

        if(isset($_FILES['pic']))
		{
			$extensao = strtolower(substr($_FILES['pic']["name"],-4)); // extensão
			$novo_nome = date("Y.m.d-H.i.s").$extensao; //novo nome
			$diretorio = "../listagem/img/"; //diretório
			$arquivo = $diretorio.$novo_nome;
			
			move_uploaded_file($_FILES['pic']["tmp_name"], $diretorio.$novo_nome); 
			
            $sql = "UPDATE animal SET 
			img_ani = '$arquivo' 
			WHERE id_ani = $id_ani";
            
			$instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
			
			
			if (!$instrucao) 
			{
				die(' Query Inválida: ' . mysqli_error($conexao));
				echo 'Falha ao enviar arquivo!';
			} 
			else 
			{
				mysqli_close($conexao);
				header ('location: ../listagem/animais.php');
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
    <h2>Cadastrar imagem padrão</h2>
	<a href='../listagem/animais.php'>Voltar</a><br><br>

	<form action='' method='POST' enctype="multipart/form-data">
    <input type="hidden" name="codigo" value="<?= $cod;?>" />
		<b><label for="pic"class="input-arquivo">Selecione a imagem</label></b>
		<input type="file" id="pic" name="pic" accept="image/*"></input><br>                        
        <input type="submit" value="Cadastrar" name="Cadastrar" class="button">
		
        </form>
</body>
</html>
	    