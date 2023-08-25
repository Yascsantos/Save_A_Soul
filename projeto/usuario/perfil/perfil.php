
<?php
    include_once("protect.php");
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Perfil</title>

   
    <style>
  
  #endereco {
            display: none;
            width: 100%;
            height: 200px;
            border: none;
            margin-top: 10px;
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
<li> <a href="../../index/index.php"><span class="material-symbols-outlined">
home
</span > INICIO</a></li>
<br>
    <li> <a href='../../sobre/sobre.php'> <span class="material-symbols-outlined">
group
</span> SOBRE</a></li>
    <br>
    <li> <a href="../../adm/produtos/produtos/listagem/pet/grade_nova.php"><span class="material-symbols-outlined">
pet_supplies
</span> PETSHOP</a></li>
    <img scr="img/dog.jpg" class="dog">
    <br>
    <li> <a href='../../index/ajude.php'><span class="material-symbols-outlined">
handshake
</span> AJUDA</a></li>
    <br>
   <li><a href='../../adm/produtos/produtos/listagem/pet/exibe_car.php'><span class="material-symbols-outlined">shopping_cart</span> COMPRAS</a>
      </li> <br>


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
                          echo "<div class='img' style='background-image: url(".$exibe['foto']."); background-position:center; background-size:100px 100px; background-repeat: no-repeat;'><b><a onclick='openPopup()'>Editar</a><b></div>";
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
                            .popup .material-symbols-outlined{
                              margin-left:90%;
                              color:rgb(156, 0, 0);
                            }
                            
                        </style>
                           <body>
                               <div id='popupContainer' style='display: none;''>
                                   <div  class='popup' >
                                    <span class='material-symbols-outlined' onclick='closePopup()'>
                                   close
                                   </span> 
                                   <br><br>
                                 
                                 <iframe src='img.php'></iframe>
                                
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
          <b>  <p>Usuário:  <?php foreach ($instrucao as $exibe){ echo $exibe['usuario'];}?> <a href='./updates/edit.html'><span class="material-symbols-outlined" style>
edit
</span></a>  <br>
		

       <p>Nome:  <?php foreach ($instrucao as $exibe){ echo $exibe['nome'];}?><br>

		      E-mail:  <?php foreach ($instrucao as $exibe){ echo $exibe['email'];}?><br>
			
          Telefone:  <?php foreach ($instrucao as $exibe){ echo $exibe['telefone'];}?>
		<br>

       <!--Senha-->
       <a class='Senha'onclick="Senha()">Editar senha</a></b>    
       <br>
      </div>
      <a onclick="abrirEnd()" class="btn">Exibir endereço</a>
    
    <!-- Iframe oculto inicialmente -->
    <iframe id="endereco" src="endereco.php"></iframe>
    
    <script>
        function abrirEnd() {
            var iframe = document.getElementById("endereco");
            if (iframe.style.display === "none") {
                iframe.style.display = "block";
            } else {
                iframe.style.display = "none";
            }
        }
    </script>



<a href='./drop/del.php' class="submit"><button type='button'>Deletar perfil</button></a>


    
  
<a class='sair'onclick="showPopup()"><span class="material-symbols-outlined">
login
</span></a>
       </form>
   
       <div id="Senha" class="popup" style="display: none;">
       <form action="./senha/mudar.php" method="POST">
    
    <h2>Preencha seus dados</h2><br>
    <label for="senha">Nova senha:</label>
    <input type="password" name="senha" placeholder="Digite sua senha" required><br>

    <label for="confirma">Confirmar nova senha:</label>
    <input type="password" name="confirma" placeholder="Confirme a senha" required><br><br>

    <button input type="submit" name="editar" value="editar"> Editar</button>

    </form>
  </div>

  <script>
    function Senha() {
      document.getElementById('Senha').style.display = 'block';
    }

    function hidePopup() {
      document.getElementById('Senha').style.display = 'none';
    }

    function Sair() {
    
      window.location.href = 'logout.php';
    }
  </script>
  

  <div id="sairPopup" class="popup" style="display: none;">
    <h3>Tem certeza que deseja Sair?</h3>
    <p>Todas as suas sessões ativas serão encerradas.</p>
    <button onclick="Sair()">Sim</button>
    <button onclick="hidePopup()">Não</button>
  </div>

  <script>
    function showPopup() {
      document.getElementById('sairPopup').style.display = 'block';
    }

    function hidePopup() {
      document.getElementById('sairPopup').style.display = 'none';
    }

    function Sair() {
    
      window.location.href = 'logout.php';
    }
  </script>
</body>
</html>