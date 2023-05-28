
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
    <style>
    .popup-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 50%;
      background-color: rgba(0, 0, 0, 0.5);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.3s ease;
    }

    .popup-content {
      background-color: purple;
      padding: 20px;
      border-radius: 5px;
      max-width: 400px;
      text-align: center;
    }


    .close-button {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
    }
    .iframe-container {
      display: none;
    }

    .iframe-container.show {
      display: block;
    }
    .input-img{
    width: 50%;
    height: 15px;
    background-color: rgba(255, 255, 255, 0.32);
    border-radius: 20px;
    outline: none;
    border: 2px solid transparent;
    color: #616161;
    transition: all 0.4s ease;
    }
 input button{
    width: 50%;
    height: 47px;
    background:  hsl(240, 28%, 25%);
    border-radius: 20px;
    outline: none;
    border: none;
    margin-top: 15px;
    color: white;
   margin-left: 20%;
    font-size: 16px;
}

  </style>
  <script>
    function showIframe() {
      var iframeContainer = document.querySelector('.iframe-container');
      iframeContainer.classList.add('show');
    }
  </script>
  <script>
    function openPopup() {
      var popupOverlay = document.querySelector('.popup-overlay');
      popupOverlay.style.opacity = '1';
      popupOverlay.style.pointerEvents = 'auto';
    }

    function closePopup() {
      var popupOverlay = document.querySelector('.popup-overlay');
      popupOverlay.style.opacity = '0';
      popupOverlay.style.pointerEvents = 'none';
    }
  </script>
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
                    <div> </div>
	<!--Dados pessoais-->
        <div class="dados">
        <?php
                        $sql_query = "select * from $tabela where $campo ='$id'";
                        // executando instrução SQL
                        $requery = mysqli_query($conexao,$sql_query);
                    
                        foreach ($requery as $exibe)
                        {
                            echo "<a href='img.html'><img src='".$exibe['foto']."' width='100px' heigth='100px'></a> ";
                        
                        }
                    
               ?>
           <button onclick="openPopup()">Editar imagem</button>

        <div class="popup-overlay">
        <div class="popup-content">
        <form action="img.php" method="POST" enctype="multipart/form-data">
                    <label>Título: </label><br />
                    <input type="text" name="titulo" required class="input-img"/><br />
                     <label>Selecione o arquivo:</label>
                    <input type="file" name="arquivo" size="45" class="submit"/></label> <br />
                    <button type="submit" value="Enviar" name="enviar" class="submit">Enviar</button>
                    <button type="reset" value="Apagar" class="submit">Apagar</button>
                </form>
            <span class="close-button" onclick="closePopup()">Fechar</span>
        </div>
        </div>


          <b>  <p>Usuário:  <?php foreach ($instrucao as $exibe){ echo $exibe['usuario'];}?><br>
		

       <p>Nome:  <?php foreach ($instrucao as $exibe){ echo $exibe['nome'];}?><br>

		E-mail:  <?php foreach ($instrucao as $exibe){ echo $exibe['email'];}?><br>
			
           Telefone:  <?php foreach ($instrucao as $exibe){ echo $exibe['telefone'];}?>
		<br>

       Senha:  <?php foreach ($instrucao as $exibe){ echo $exibe['senha'];}?></p></b> 
       <br>
       <button onclick="showIframe()">Exibir Endereço</button>

<div class="iframe-container">
  <iframe src="endereco.php" width="600" height="200" frameborder="0"></iframe> 
 
</div> <a href='./updates/form.php' class="submit"><button type='button'>Editar</button></a>
           
      <br><br>
  

       </form>
   
</body>
</html>