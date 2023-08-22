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
      <h1>Editar perfil</h1><br>
      </main>
<main>

  <div class="caixa">
      <div class="img-caixa">
          <img src="imgs/dog.jpg">
      </div>

    <div class="caixa-dados">
    <form action="update.php" method="POST">
               
    
    
          <h2>Editar </h2>
          <a href="../perfil.php">Voltar ao perfil</a><br><br>

            <div class="input-dados">

                <label for="nome"> Nome de usuário</label>
                <input type="text" name="usuario" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['usuario'];}?>" >
                <br> <br>

                <label for="nome"> Nome Completo</label>
                <input type="text" name="nome" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['nome'];}?>" >
                <br> <br>

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['email'];}?>" >
                <br> <br>

    
                <div class="input-senha">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['telefone'];}?>" >
                <br> <br> </div>
            </div>
            <br><br>
        <button input type="submit" name="alterar" value="Alterar"> Alterar</button>
        
    </div>
       

    </form>
        </main>
</body>
</html>