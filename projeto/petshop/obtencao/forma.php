



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../adm/css/style.css">
<title>Forma de obtenção</title>
</head><style>
    body {
        background-image: url(../imgs/fundo.jpg);
        background-position: center;
        color: #2d3520;
    
    }
  


.caixa-dados{
    margin: 29%;
    margin-left:35%;
  text-align: center;
    background-color: rgba(135, 156, 117, 0);
    padding: 30px 40px;
    width: 30%;
    border-radius: 20px;
    
}

.caixa-dados  a{
    font-family: 'Poppins';
    text-decoration:none;
    font-size: 0.9rem;
    font-weight:600;
    color: #2d3520;
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
    background: #2d3520;
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
    <a type='submit' name="entrega" onclick='openPopup()'><h2>Entrega</h2></a>
      <div id='popupContainer' style='display: none;'>
        <div  class='popup' >
         <span class='material-symbols-outlined' onclick='closePopup()'>
        close
        </span> 
            <input type='radio'  id=pix name='pag' value= 'pix'>
            <label for='pix'>PIX</label><br>

            <input type='radio'  id='cartao' name='pag' value= 'cartao'>
            <label for='cartao'>CARTÃO</label><br>

            <input type='submit' name='conf' value= 'Confirmar'>
        </div>
    </div></form>
    <form action="retira.php" method="post">
        <a href='retira.php'><button type='submit' name="retira">Retira</button></a>
    </form>

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
