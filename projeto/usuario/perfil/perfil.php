<?php
include_once("protect.php");
include_once("../../conexaoBD.php");
$tabela = "user";
$campo = "id_user";
$id = $_SESSION['id_user'];

$sql = "select * from $tabela where $campo ='$id'";

$instrucao = mysqli_query($conexao, $sql);
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
  #car{
    width: 100%;
  height: 400px;
            border: none;
            margin-top: 10px;

  }
  #endereco {
            display: none;
            width: 100%;
            height: 200px;
            border: none;
            margin-top: 10px;
        }
        .carrinho {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
    justify-content: center;
    align-items: center;
}

.content-carrinho  {
  background-color:#667948;
     border-radius: 5px;
    width:50%;
    height:500px;
    margin-left:53%;
    padding: 10px;
    text-align: center;
    color:#fff;
    font-family: 'Poppins';
    position: relative;
}
.content-carrinho  a {
  color :#fff;
  text-decoration: none;
}
.fechar {
    position: absolute;
    top: 10px;
    left: 20px;
    font-size: 24px;
    cursor: pointer;
}
 #open-cart .material-symbols-outlined{
        margin-top: 2px;
        margin-left:15px;
        position: absolute;
    }
.senha{
                              border:none ;
                              background-color: #fff;
                              font-size: 0.9rem;
                              text-decoration:none;
                              font-size: 0.9rem;
                              font-weight:600;
                              color: black;
                              margin-left: 70%;
                              font-family: 'Poppins', sans-serif;
                              
                            }
                           .senha:hover{
                              border-bottom:2px solid black ;
                              
                            }

                            .sim{
                              border:none ;
                              background-color: #fff;
                              color: black;
                              font-size: 0.9rem;   
                  font-size: 0.9rem;
                  color: black;
                  position: absolute;
                              margin-right: 10%;
                              font-family: 'Poppins', sans-serif;
                              
                            }
                           .sim:hover{
                              border-bottom:2px solid black ;
                              
                            }
                            .nao{
                              position: absolute;
                              border:none ;
                              background-color: #fff;
                              font-size: 0.9rem;
                  
                              font-size: 0.9rem;
                              color: black;
                              margin-top: 8px;
                              margin-left: 30%;
                              font-family: 'Poppins', sans-serif;
                              
                            }
                           .nao:hover{
                              border-bottom:2px solid black ;
                              
                            }



  </style>

</head>

 <div class='contener'>
 
<div class='menu'>

<ul>
    <br><br>
    <div class="logo"><img src="../../index/imgs/logo.png"  ></div>
    <br><br><br><br><br><br><br><br>
<li><br> <a href="../../index.php"> INICIO </a></li>
<br>
    <li><br> <a href='../../sobre/sobre.php'>SOBRE NÓS</a></li>
    <br>
    <li> <br><a href="../../adm/produtos/produtos/listagem/pet/grade_nova.php">PETSHOP</a></li>
    <img scr="img/dog.jpg" class="dog">
    <br>
    <li><br> <a href='../../index/ajude.php'> COMO AJUDAR?</a></li>
    <br>

    


</ul>


</div>
<div class='ola'>
<p>Seja bem vinda(o) ao seu perfil <strong><?php foreach ($instrucao as $exibe){ echo $exibe['usuario'];}?>:)</strong></p><br>
</div>
<form>
  <div class='perfil'>
   
               
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
                          box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
                          
                          
                          font-family: 'Poppins', sans-serif;
                          background-color: rgba(255, 255, 255, 0.993);
      
                          text-align: justify;
                        }
                        .popup form  input{
                  
                          outline: none;
                          border:none;
                          padding: 15px;
                          font-size: 15px;
                          color: #616161;
                          transition: all 0.4s ease;
                          }
                         .popup form  input:focus{
                     
                            border-bottom: 2px solid #adb5a0;
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
                                    <span class='material-symbols-outlined'  onclick='reloadPage()'>
                                   close
                                   </span> 
                                   <br><br>
                                 
                                 <iframe src='img.php'></iframe>
                                
                                   </div>
                               </div>
                          
                           </body>
                           </html>";
                        }
                      ?>



<div class="dados">
          <b>  <p>Usuário:  <?php foreach ($instrucao as $exibe){ echo $exibe['usuario'];}?> <a href='./updates/pessoal.php'><span class="material-symbols-outlined" style>
edit
</span></a> <a id="open-cart"><span class="material-symbols-outlined">
shopping_cart
</span></a> <br>

<div id="cart-modal" class="carrinho">

    <div class="content-carrinho">
    <span class="fechar" id="close-cart">&times;</span>
        Carrinho de Compras
     
        <iframe src="../../adm/produtos/produtos/listagem/pet/exibe_car.php" id="car"></iframe>
      
    
        <a href='../../adm/produtos/produtos/listagem/pet/grade_nova.php'>Continuar comprando</a>     <button  class='comprar'>    <a href='../../petshop/obtencao/forma.php'><b>Finalizar compra</b></button></a>
        </div>
</div>

    <script src="script.js"></script>
		

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
    <iframe id="endereco" src="endereco.php" scrolling="no"></iframe>
    



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

    <button input type="submit" name="editar" value="editar" class='senha'> >Editar</button>

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
    <button onclick="Sair()" class='sim'><b>Sim</b></button>
    <button onclick="hidePopup()" class='nao'><b>Não</b></button><br><br>
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
   
   <script>
                                   function openPopup() {
                                       document.getElementById('popupContainer').style.display = 'block';
                                   }
                           
                                   function closePopup() {
                                       document.getElementById('popupContainer').style.display = 'none';
                                   }
                                   function reloadPage() {
                                    location.reload();
                                }
                               </script>
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

</body>
</html>