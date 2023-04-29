<!--Parte em php-->
<?php
	//iniciação de sessão para trás o ID para a alteração
		if(!isset($_SESSION))
			{
				session_start();
			}

	//Conectando ao banco		
		include_once("../../../conexaoBD.php"); 
	//Tabela no BD
		$tabela="colaboradores"; 
	//chave primaria
		$id = "id_user";  
	//código e/ou id vindo do formulário anterior
		$id_user = $_SESSION['id_user'];  
 	

	//busca de valores para alterar 
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
    <title>Editar perfil</title>
</head>
<body>
    <h1>Edite seu perfil</h1>
	<p> Se não quiser alterar o dado, apenas reescreva o que já está escrito. </p>

    <!--Formulário-->
    <form action="alter.php" method="POST">
        <fieldset>
            <legend><h2>Dados pessoais</h2></legend>
            <label for="nome"> Escolha um nome de usuário</label>
            <input type="text" name="usuario" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['usuario'];}?>" >
            <br> <br>

            <label for="nome"> Nome Completo</label>
            <input type="text" name="nome" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['nome'];}?>" >
            <br> <br>

            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['email'];}?>" >
            <br> <br>

            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['telefone'];}?>" >
            <br> <br>

            <label for="senha">Senha</label>
            <input type="password" name="senha" Disabled  placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['senha'];}?>" >
            <br> <br>

        </fieldset>

        <fieldset>
            <legend><h2>Endereço</h2></legend>
                <label for="cep"> CEP:</label>
                <input type="text" name="cep" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['cep'];}?>" >
                <br> <br>
    
                <label for="pais">País:</label>
                <input type="text" name="pais" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['pais'];}?>" >
                <br> <br>
    
                <label for="estado">Estado:</label>
                <input type="text" name="estado" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['estado'];}?>" >
                <br> <br>
    
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['cidade'];}?>" >
                <br> <br>
    
    
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['bairro'];}?>" >
                <br> <br>
    
                <label for="rua">Rua:</label>
                <input type="text" name="rua" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['rua'];}?>" >
    
                <label for="numero">Número:</label>
                <input type="number" name="numero" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['numero'];}?>" >
                <br> <br>
        </fieldset>

        <input type="submit" name="alterar" value="Alterar">
        <br> <br>

    </form>
</body>
</html>