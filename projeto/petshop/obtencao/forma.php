
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../../adm/css/style.css">
<title>Forma de obtenção</title>
</head><style>
    body {
        background-image: url(../imgs/fundo.jpg);
        background-position: center;
        background-repeat:no-repeat ;
        color: #2d3520;
    
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
  background-color: #ADB5A0;
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
 

  }

.caixa-dados{
    margin: 20%;
    margin-left:35%;
  text-align: center;
    background-color: #FFC229;
    padding: 30px 40px;
    width: 30%;
    border-radius: 20px;
    
}

.caixa-dados  a{
    font-family: 'Poppins';
    text-decoration:none;
    font-size: 0.9rem;
    font-weight:600;
    color: #361B0D;
  }
 
 .caixa-dados a:hover{
    color:#3a3a3b;
  }
.caixa-dados form{
    margin: 20px 0;
}
button{
    width: 30%;
    height: 30px;
    background: #361B0D;
    outline: none;
    border: none;
    color: white;
    font-size: 16px;
}

</style>
<body>
   
<div class="caixa-dados">
    <h2>Qual a forma de retirada?</h2>
    <form action="entrega.php" method="post">
    <a type='submit' name="entrega" onclick='openPopup()'><h2>Entrega </h2></a>
      <div id='popupContainer' style='display: none;'>
        <div  class='popup' >
         <span class='material-symbols-outlined' onclick='closePopup()'>
        close
        </span> <BR>
            <input type='radio'  id=pix name='pag' value= 'pix'>
            <label for='pix' class="material-symbols-outlined">
qr_code_2</label>PIX<br>

            <input type='radio'  id='cartao' name='pag' value= 'cartao'>
            <label for='cartao' class="material-symbols-outlined">
credit_card
</label>CARTÃO<br>

            <BUTTON input type='submit' name='conf' value= 'Confirmar'>Confirmar</BUTTON>
        </div>
    </div></form>
    <form action="retira.php" method="post">
        <a id="open-cart"><button type='submit' name="retira">Retira</button></a>
       
       
    </form>
    <div id="cart-modal" class="carrinho">

<div class="content-carrinho">
<span class="fechar" id="close-cart">&times;</span>
    
 
    <iframe src='entrega.php'id="car"></iframe>
  

    <button  class='comprar'>    <a href='../../petshop/obtencao/forma.php'><b>Finalizar compra</b></button></a>
    <a href='grade_nova.php'>Continuar comprando</a> </div>
</div>
<script src="script.js"></script>
    <script>
        function openPopup() {
            document.getElementById('popupContainer').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('popupContainer').style.display = 'none';
        }
    </script>
</body>
</html>
