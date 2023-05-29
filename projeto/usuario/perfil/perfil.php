
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function recarregarParte() {
      location.reload();
    }
    function exibirIframe() {
      var iframeContainer = document.getElementById("iframeContainer");
      iframeContainer.style.display = "block";
      iframeContainer.innerHTML = '<iframe src="endereco.php"></iframe>';
    }
  </script>
    <title>perfil</title>
    <style>
    <style>
    #iframeContainer {
      display: none;
    }

  </style>

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
    <li> <a href='../../sobre/sobre.html'>SOBRE</a></li>
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
                  
        <!--Colocando a imagem padrão do perfil -->
  <?php
  
                        $sql_query = "select * from $tabela where $campo ='$id'";
                        // executando instrução SQL
                        $requery = mysqli_query($conexao,$sql_query);
                    
                        foreach ($requery as $exibe)
                        {
                            echo "<a href='img.html'><img src='".$exibe['foto']."' width='100px' heigth='100px'></a> ";
                        
                        }
                    
               ?>

      <!-- Botão para abrir o popup -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Editar imagem</button>

<!-- Popup -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Conteúdo do popup -->
      <div class="modal-body">
        <iframe src="img.php" width="560" height="100px" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
        <button type="button"  onclick="recarregarParte()">Atualizar</button>
    </div>
  </div>
</div>

<div>
          <b>  <p>Usuário:  <?php foreach ($instrucao as $exibe){ echo $exibe['usuario'];}?><br>
		

       <p>Nome:  <?php foreach ($instrucao as $exibe){ echo $exibe['nome'];}?><br>

		E-mail:  <?php foreach ($instrucao as $exibe){ echo $exibe['email'];}?><br>
			
           Telefone:  <?php foreach ($instrucao as $exibe){ echo $exibe['telefone'];}?>
		<br>

       Senha:  <?php foreach ($instrucao as $exibe){ echo $exibe['senha'];}?></p></b> 
       <br>
       <button onclick="exibirIframe()">Exibir endereco</button>
  <div id="iframeContainer"></div>
 
       </div>
    

<a href='./updates/form.php' class="submit"><button type='button'>Editar</button></a>
           
    
  

       </form>
   
</body>
</html>