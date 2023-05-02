
<?php
    //iniciação de sessão
	if(!isset($_SESSION))
    {
        session_start();
    }

    //verificação de usuário existente ou não 
    if ($_SESSION['id_user'] == 0 or  $_SESSION['id_user'] == "")
    {
        header("Location: ../login/login.php");

    }

    //Conectando ao banco
	include_once("../../conexaoBD.php");

	//Tabela no BD
	$tabela="colaboradores";
    $campo= "id_user";
	$id= $_SESSION['id_user'];

	//Script de uma busca em uma tabela no Banco de Dados
	$sql = "select * from $tabela where $campo ='$id'";
	
	// executando instrução SQL
	$instrucao = mysqli_query($conexao,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css" type="text/css">
    <title>perfil</title>
</head>
<body>
<header id="menu">
 
</header>
 <div class='contener'>
     <div class='menu'>
            <ul class='nav-list'>
                <li> <a href='#'>SOBRE</a></li>
                <br>
                <li> <a href='#'>BAZAR</a></li>
                <br>
                <li> <a href='#'>AJUDA</a></li>
                <br>
                <li> <a href='#'>ADOTE</a></li>
                <br>
                <li> <a href='../logout.php>'>SAIR</a></li>
            </ul>
    </div>

    
    <form class='perfil'>
	<!--Dados pessoais-->
        <h2>Dados pessoais</h2>
        <p>Seja bem vinda ao seu perfil <strong><?php foreach ($instrucao as $exibe){ echo $exibe['nome'];}?></strong></p>
        <table>
        <tr>
            <th>Imagem de perfil: </th>
            <th>
                <!--Colocando a imagem padrão do perfil -->
                <?php
                        $sql_query = "select * from $tabela where $campo ='$id'";
                        // executando instrução SQL
                        $requery = mysqli_query($conexao,$sql_query);
                    
                        foreach ($requery as $exibe)
                        {
                            echo "<img src='".$exibe['foto']."' width='100px' heigth='100px'>";
                            echo "<th></th> <th></th>";
                        }
                    
               ?>
            </th> 
        </tr>
        <tr>
            <th>Nome de usuário: </th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['usuario'];}?></th>
			<th></th> <th></th>
        </tr>

        <tr>
            <th>Nome: </th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['nome'];}?></th>
			<th></th> <th></th>
        </tr>

        <tr>
            <th>E-mail: </th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['email'];}?></th>
			<th></th> <th></th>
        </tr>

        <tr>
            <th>Telefone: </th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['telefone'];}?></th>
			<th></th> <th></th>
        </tr>

        <tr>
            <th>Senha: </th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['senha'];}?></th>
			<th></th> <th></th>
        </tr>

      
	</table> 


	<!--Endereço-->
    <h2>Endereço</h2>
    <table>
        <tr>
            <th>CEP: </th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['cep'];}?></th>
			<th></th> <th></th>
        </tr>

        <tr>
            <th>País: </th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['pais'];}?></th>
			<th></th> <th></th>
        </tr>

        <tr>
            <th>Estado: </th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['estado'];}?></th>
			<th></th> <th></th>
        </tr>

        <tr>
            <th>Cidade: </th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['cidade'];}?></th>
			<th></th> <th></th>
        </tr>

        <tr>
            <th>Bairro: </th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['bairro'];}?></th>
			<th></th> <th></th>
        </tr>

        <tr>
            <th>Rua: </th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['rua'];}?></th>
			<th></th> <th></th>
        </tr>

        <tr>
            <th>Número: </th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['numero'];}?></th>
			<th></th> <th></th>
        </tr>

    </table>
	<br> <br> 					
	<button type='button'><a href='./updates/form.php'><b >EDITAR PERFIL </b></a></button>
    <br> <br>
    <button type='button'><a href="../../index/index.php"><b >VOLTAR AO INDEX </b></a></button>

</form>
</body>
</html>