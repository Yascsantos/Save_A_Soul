<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Petshop|Save a soul</title>
</head>
<style>   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

* {
  font-family: 'Poppins';
}





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
  transform: translate(-50%, -50%);
  text-align: center;
}

.popup iframe {
  border: none;
}
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

.fechar {
    position: absolute;
    top: 10px;
    left: 20px;
    font-size: 24px;
    cursor: pointer;
}
.comprar{
    width: 30%;
    height: 30px;
    background:   #474845;
    color: white;
    font-size: 13px;
 

  }</style></style>
<body>

   
        <header>
        <div class="logo">
         
         <img src="../../../../../index/imgs/logo.png" >
  
         </div><!--logo-->

            <div class="cabeçalho-link">
                <li>
                   <a href="../../../../../index.php">Inicio</a>
                </li>
            
                <li> <a href="../../../../../index/ajude.php">Como ajudar?</a></li>
</ul>
<?php  include_once("../barra/barra.php"); ?>  
      
            </div><!--cabeçalho-link-->
            <div class="icon"onclick='openPopup()'><span><ion-icon name="filter"></ion-icon></span></div>
            <div class="icon" id="open-cart"><span><ion-icon name="bag-outline"></ion-icon></span></div>
            <div id="cart-modal" class="carrinho">

<div class="content-carrinho">
<span class="fechar" id="close-cart">&times;</span>
    Carrinho de Compras
 
    <iframe src="exibe_car.php" id="car"></iframe>
  

  <a href='grade_nova.php'>Continuar comprando</a>    <button  class='comprar'>    <a href='../../../../../petshop/obtencao/forma.php'><b>Finalizar compra</b></button></a>
   </div>
</div>

<script src="script.js"></script>
         
            <div class="icon" ><a href="../../../../../usuario/perfil/perfil.php"><span><ion-icon name="person"></a></ion-icon></span></div>
            <div id='popupContainer' style='display: none;'>
                           <div  class='popup' >
             
                           <br><br>
                           <?php include_once("../filtro/filtro.php"); ?>
                           </div>
                       </div>
                   
                       <script>
                           function openPopup() {
                               document.getElementById('popupContainer').style.display = 'block';
                           }
                   
                 
                       </script>
                     </div> 
        </header> 
        <section>
        <div class="inicio">
            <br>
            <h1>PARTICIPE ATIVAMENTE </h1>
            <H1>COMPRANDO NOSSOS </H1><P>PRODUTOS PARTE DO LUCRO DAS VENDAS VÃO PARA MANUTENÇÃO DA ONG</P>
            <button>Confira abaixo</button>
          

        </div>
    </div> 
         
</section>
<section class="promo" >
        <div class="text-promo">
            <h6> NA PRIMEIRA COMPRA</h6>
           
            <h4>20% OFF<br>CONFIRA JÁ</h4>
            <a href="#produto" class="btn">Compre agora</a>
        
        </div>
    </section><!--cta-->


<section id='produto'>
        <h1>Variedade de produtos</h1>
        <div class="Container-produto">
        <?php
     include_once("../../../../../conexaoBD.php");
     $sql_code= "SELECT * FROM produto";
     $pesquisa = mysqli_query($conexao,$sql_code);
                
  
     foreach ($pesquisa as $exibe) 

     {
        echo "

     
            <div class='produto'>
            <a href='../../../../../petshop/perfil.php?&codigo=".$exibe['id_pro']."'>  <img src=".$exibe['img_pro']." style='height:350px;  width:350px;'>
            </a>
          <p> ".$exibe['prod']."</p>
                <h5>R$".$exibe['preco']."</h5>
                  <ion-icon name='cart-outline'></ion-icon>
            </div><!--roupa-->
                        
            ";
        }
   
   
   ?> 

 </div>
    </section>


    <section>
        <h1>Marcas</h1>
        <div class="tipos">
        <div class="cards">
                <img src="../../../../../petshop/imgs/ali.png">
            </div>
            <div class="cards">
                <img src="../../../../../petshop/imgs/ca.jpg">
            </div>
            <div class="cards">
                <img src="../../../../../petshop/imgs/grande.jpg">
            </div>
</div>
    
    </section>
   

    <section class="contato" id='contato'>
        <div class="max-width">
            <h2>Contato</h2>
            <div class="contato-content">
               <div class="column left">

                   <p>Fazemos valer as leis que protegem os animais, fiscalizamos os órgãos públicos e denunciamos crimes. Isso é dar voz a quem não pode falar, e quanto mais gente, melhor! Por isso contamos com você nessa tarefa!</p>
               
               <div class="icons">
                   <div class="row">
                        <ion-icon name="person-outline"></ion-icon>
                        <div class="info">
                            <div class="head">Nome</div>
                            <div class="sub-title">Ong-Save a Soul</div>
                        </div>
                   </div>
                   <div class="row">
                    <ion-icon name="earth-outline"></ion-icon>
                    <div class="info">
                        <div class="head">Endereço</div>
                        <div class="sub-title">Endereço: Av. Ten. Marques, s/n - Fazendinha, Santana de Parnaíba - SP, 06529-001</div>
                    </div>
               </div>
               <div class="row">
                <ion-icon name="person-outline"></ion-icon>
                <div class="info">
                    <div class="head">Email</div>
                    <div class="sub-title">saveasoul2023@gmail.com</div>
                </div>
           </div>
               </div>
            </div><!--column left-->
            <div class="column rigth">
                <div class="text">Mensagem</div>
                <form action="#">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" placeholder="Nome" required>
                        </div>
                        <div class="field email">
                            <input type="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="field">
                            <input type="text" placeholder="Sobrenome" required>
                        </div>
                        <div class="field textarea">
                           <textarea  cols="30" rows="10" placeholder="Escrever...." required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </section>

    <!--sessão  footer-->
    <footer>
        <span>Criado para <a href="#"></a>Fins educacionais | TCC dos discentes da Etec-Bartolomeu Bueno da Silva 2023</span>
    </footer>

                

    
    <script src="https://unpkg.com/scrollreveal"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/script.js"></script>
</body>
</html> 