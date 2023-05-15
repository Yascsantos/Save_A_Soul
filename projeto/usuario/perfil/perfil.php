
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

 <div class='contener'>

<div class='menu'>

<ul class='nav-list'>
    <br><br>
    <div class="logo"><img src="../../index/imgs/logo.png"  ></div>
    <br><br><br><br><br><br><br><br>
<li> <a href="../../index/index.php">INICIO</a></li>
<br>
    <li> <a href='#'>SOBRE</a></li>
    <br>
    <li> <a href='#'>LOJA</a></li>
    <img scr="img/dog.jpg" class="dog">
    <br>
    <li> <a href='#'>AJUDA</a></li>
    <br>
    <li> <a href="msg.html">SAIR</a></li>

</ul>


</div>

    <form class='perfil'>
    
    <p>Seja bem vinda ao seu perfil <strong><?php foreach ($instrucao as $exibe){ echo $exibe['usuario'];}?></strong></p><br>
    
	<!--Dados pessoais-->
        <table>
        <tr>
          
            
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
            <th>Usuário : </th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['usuario'];}?></th>
			<th></th> 
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

      <br><br>
	<!--Endereço-->
  

    <h2>Endereço</h2>
    <table>
        <tr>
        <th></th>
            <th>CEP: </th>
            <th></th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['cep'];}?></th>
			<th></th> 
        </tr>

        <tr>
        <th></th>
            <th>País: </th>
            <th></th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['pais'];}?></th>
			<th></th> 
        </tr>

        <tr>
        <th></th>
            <th>Estado: </th>
			<th></th>
            <th><?php foreach ($instrucao as $exibe){ echo $exibe['estado'];}?></th>
			<th></th>
        </tr>

        <tr>
        <th></th>
            <th>Cidade: </th>
			 <th></th>
             <th><?php foreach ($instrucao as $exibe){ echo $exibe['cidade'];}?></th>
			<th></th> 
        </tr>

        <tr>
        <th></th>
            <th>Bairro: </th>
            <th></th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['bairro'];}?></th>
			<th></th> 
        </tr>

        <tr>
        <th></th>
            <th>Rua: </th>
            <th></th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['rua'];}?></th>
			<th></th> <th></th>
        </tr>

        <tr>
        <th></th>
            <th>Número: </th>
            <th></th>
			<th><?php foreach ($instrucao as $exibe){ echo $exibe['numero'];}?></th>
			
        </tr>

    
    </table> 
	<br> 
    <button type='button'><a href='./updates/form.php'>EDITAR </a></button>


       </form>
     
    </div>
   
</body>
</html>