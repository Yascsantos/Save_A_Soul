
<?php
	if(!isset($_SESSION))
    {
        session_start();
    }

    if ($_SESSION['id_user'] == 0 or  $_SESSION['id_user'] == "")
    {
        header("Location: ../login/login.php");

    }

    
    include_once("../../conexaoBD.php");
    $tabela="user";
    $campo= "id_user";
    $id= $_SESSION['id_user'];

    $sql = "select * from $tabela where $campo ='$id'";
    
    $instrucao = mysqli_query($conexao,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css" type="text/css">
    <title>Perfil</title>
  <script>
  
    function exibirEnd() {
      var iframeContainer = document.getElementById("iframeContainer");
      iframeContainer.style.display = "block";
    }
  </script>
   
    <style>
  
    #iframeContainer {
     
      border: none;
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

</ul>


</div>

    
<form class='perfil'>
    <p>Seja bem vinda ao seu perfil <strong><?php foreach ($instrucao as $exibe){ echo $exibe['usuario'];}?></strong></p><br>
                  
        <!--Colocando a imagem padrão do perfil -->
  <?php
                $sql_query = "SELECT * FROM $tabela WHERE $campo ='$id'";
                        $requery = mysqli_query($conexao,$sql_query);
                    
                        foreach ($requery as $exibe)
                        {
                          echo "<div class='img' style='background-image: url(".$exibe['foto']."')><b><a onclick='openPopup()'>Editar</a><b></div>";
                          echo "
                           <html>
                           <style>
                          
                        .popup label {
                            display: block;
                            margin-bottom: 10px;
                        }
                
                    
                            .popup {
                              width: 300px;
                              padding: 20px;
                              background-color: #fff;
                              border: 1px solid #ccc;
                              position: absolute;
                              top: 50%;
                              left: 50%;
                              transform: translate(-50%, -50%);
                              text-align: center;
                            }
                        
                          .popup  iframe {
                            border: none;
                            }
                          
                            
                        </style>
                           <body>
                               <div id='popupContainer' style='display: none;''>
                                   <div  class='popup' >
                                 <iframe src='img.php'></iframe>
                                   <button onclick='closePopup()'>Fechar</button>
                                   </div>
                               </div>
                           
                               <script>
                                   function openPopup() {
                                       document.getElementById('popupContainer').style.display = 'block';
                                   }
                           
                                   function closePopup() {
                                       document.getElementById('popupContainer').style.display = 'none';
                                   }
                               </script>
                           </body>
                           </html>";
                        }
                      ?>



<div class="dados">
          <b>  <p>Usuário:  <?php foreach ($instrucao as $exibe){ echo $exibe['usuario'];}?><br>
		

       <p>Nome:  <?php foreach ($instrucao as $exibe){ echo $exibe['nome'];}?><br>

		      E-mail:  <?php foreach ($instrucao as $exibe){ echo $exibe['email'];}?><br>
			
          Telefone:  <?php foreach ($instrucao as $exibe){ echo $exibe['telefone'];}?>
		<br>

       Senha:  <?php foreach ($instrucao as $exibe){ echo $exibe['senha'];}?></p></b> 
       <br>
      </div>
       <a class='end' onclick="exibirEnd()">EXEBIR ENDEREÇO</a>
  <div id="iframeContainer"><iframe src="endereco.php"></iframe></div>

    

<a href='./updates/form.php' class="submit"><button type='button'>Editar</button></a>
           
    
  
<a class='sair'onclick="showPopup()">Sair</a>
       </form>
   

  

  <div id="sairPopup" class="popup" style="display: none;">
    <h3>Tem certeza que deseja Sair?</h3>
    <p>Todas as suas sessões ativas serão encerradas.</p>
    <button onclick="performSair()">Sim</button>
    <button onclick="hidePopup()">Não</button>
  </div>

  <script>
    function showPopup() {
      document.getElementById('sairPopup').style.display = 'block';
    }

    function hidePopup() {
      document.getElementById('sairPopup').style.display = 'none';
    }

    function performSair() {
    
      window.location.href = 'logout.php';
    }
  </script>
</body>
</html>