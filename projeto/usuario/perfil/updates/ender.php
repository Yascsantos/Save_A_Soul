<!--Parte em php-->
<?php
	//iniciação de sessão para trás o ID para a alteração
		if(!isset($_SESSION))
			{
				session_start();
			}

		include_once("../../../conexaoBD.php"); 
		$tabela="user"; 
		$id = "id_user";  
		$id_user = $_SESSION['id_user'];  
 	

		$sqlPesq = "SELECT * FROM $tabela WHERE $id= $id_user";
	
		$pesquisa = mysqli_query($conexao,$sqlPesq);

		if (!$pesquisa) 
			{
				die(' Query Inválida: ' . mysqli_error($conexao));
			} 


?>

<!--PARTE EM HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editar.css">
    <title>Editar perfil</title>
  
</head>
<body>
<main>
      <h1>Editar perfil</h1>
      </main>
<main>
  
      

  
        </main>
</body>
</html>