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
 
 
</style>
</head>
<body>

	<form action='' method='POST' enctype="multipart/form-data">
    <input type="hidden" name="codigo" value="<?= $cod;?>" />
		<b><label for="pic"class="input-arquivo">Selecione a imagem</label></b>
		<input type="file" id="pic" name="pic" accept="image/*"></input>                   
        <button input type="submit" value="Cadastrar" name="Cadastrar" >Cadastrar</button>
		
        </form>
</body>
</html>
	    