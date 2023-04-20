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
	
	//executa, testa e encerra conexão
		$pesquisa = mysqli_query($conexao,$sqlPesq);

		if (!$pesquisa) 
			{
				die(' Query Inválida: ' . mysqli_error($conexao));
			} 

	
	//se o botão for pressionado
		if (isset($_GET['alterar'])) 
		{
			//dados vindos do formulário
				$usuario = $_POST['usuario'];
				$nome = $_POST['nome'];
				$email = $_POST['email'];
				$tel = $_POST['telefone'];
				$cep = $_POST['cep'];
				$pais = $_POST['pais'];
				$estado = $_POST['estado'];
				$cidade = $_POST['cidade'];
				$rua = $_POST['rua'];
				$bairro = $_POST['bairro'];
				$numero = $_POST['numero'];
		

			//Script para atualizar um registro na tabela no Banco de Dados
			$sql = "UPDATE $tabela SET 
				usuario = '$usuario', 
				nome = '$nome',
				email = '$email', 
				telefone = '$tel', 
				cep = '$cep', 
				pais = '$pais', 
				estado = '$estado', 
				cidade = '$cidade', 
				rua = '$rua', 
				numero = '$numero' 
				WHERE $id = '$id_user'";
				
		// executando instrução SQL
			$instrucao = mysqli_query($conexao,$sql);
		
		//concluindo operação
			if ($instrucao) 
			{
				mysqli_close($conexao);
				header ('Location:../../login/login.php');
				exit;
		
			} 
			else 
			{
				die(' Query Inválida: ' . mysqli_error($conexao));
			}
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
    <form action="" method="POST">
        <fieldset>
            <legend><h2>Dados pessoais</h2></legend>
            <label for="nome"> Escolha um nome de usuário</label>
            <input type="text" name="usuario" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['usuario'];}?>" required>
            <br> <br>

            <label for="nome"> Nome Completo</label>
            <input type="text" name="nome" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['nome'];}?>" required>
            <br> <br>

            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['email'];}?>" required>
            <br> <br>

            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['telefone'];}?>" required>
            <br> <br>

            <label for="senha">Senha</label>
            <input type="password" name="senha" Disabled  placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['senha'];}?>" required>
            <br> <br>

        </fieldset>

        <fieldset>
            <legend><h2>Endereço</h2></legend>
                <label for="cep"> CEP:</label>
                <input type="text" name="cep" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['cep'];}?>" required>
                <br> <br>
    
                <label for="pais">País:</label>
                <input type="text" name="pais" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['pais'];}?>" required>
                <br> <br>
    
                <label for="estado">Estado:</label>
                <input type="text" name="estado" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['estado'];}?>" required>
                <br> <br>
    
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['cidade'];}?>" required>
                <br> <br>
    
    
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['bairro'];}?>" required>
                <br> <br>
    
                <label for="rua">Rua:</label>
                <input type="text" name="rua" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['rua'];}?>" required>
    
                <label for="numero">Número:</label>
                <input type="number" name="numero" placeholder="<?php foreach ($pesquisa as $exibe){ echo $exibe['numero'];}?>" required>
                <br> <br>
        </fieldset>

        <input type="submit" name="alterar" value="Alterar">
        <br> <br>

    </form>
</body>
</html>