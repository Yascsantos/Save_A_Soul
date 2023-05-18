<?php
	//iniciação de sessão para trás o ID para a alteração
	if(!isset($_SESSION))
    {
        session_start();
    }

	include_once('../../conexaoBD.php');
	$tabela="colaboradores";
	$campos = "foto";
	$diretorio = "../img/"; 

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
			header("Location: perfil.php");
			exit;
		}	
	}
	
?>

