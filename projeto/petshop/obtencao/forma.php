
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  
<title>Forma de obtenção</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
    main{
  
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  min-height: 10vh;

}
body{
        background-image: url(../../index/imgs/fundo.png);
    }a{
    
      font-size: 0.9rem;
      text-decoration:none;
      font-size: 0.9rem;
      font-weight:600;
      color: black;
      
    }
    button{
    border:none ;
    background-color: #fff;
    font-size: 0.9rem;
    text-decoration:none;
    font-size: 0.9rem;
    font-weight:600;
    color: black;
    
    font-family: 'Poppins', sans-serif;
    
  }
    a:hover{
      color:#3a3a3b;
    }
    .encontro{
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
    width: 700px;
     margin-top: 200px;
  
    font-family: 'Poppins', sans-serif;
    background-color: rgba(255, 255, 255, 0.993);
    padding: 30px 40px;
    text-align: justify;
    }
    input label{
    color: #4c5838;
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

form  input[type='submit']{
    font-family: 'Poppins', sans-serif;
    background-color: rgba(255, 255, 255, 0.32);
    border: 2px solid transparent;
    color: #616161;
    transition: all 0.4s ease;
    margin-left: 70%;
}
form  input[type='submit']:hover{
color: #adb5a0;
    border-bottom:1px solid black ;
}



span{
  margin-top: -15px;
  height: 17px;
  margin-right: 30%;
  position: absolute;

  
}
label {
    margin-top: -3px;
  height: 17px;
  margin-left: 10%;
  position: absolute;
    
}


  

        .carrinho {

    position: fixed;
    top: 0;
    left: 0;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
    z-index: 1;
    justify-content: center;
    align-items: center;
}

.content-carrinho  {
    background-color: #ffff;
    width:50%;
    text-align: center;
    color:black;
    font-family: 'Poppins';
    position: relative;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
    font-family: 'Poppins';
        background-size:cover;
        justify-content: center;
     
   
}
.fechar {
    position: absolute;
    top: 10px;
    left: 20px;
    font-size: 24px;
    cursor: pointer;
    color:#2c491b;
}
.material-symbols-outlined{
        margin-top: -1px;
      margin-right: 10%;
        position: absolute;
    }


</style>
<body>
    <main>
    <div class='encontro' > 
    <h2>Qual a forma de retirada?</h2>
    <form action="retira.php" method="post">
        <button type='submit' name="retira"><h2>->Retirar na loja </h2></button>
       
       
    </form>

    <form action="entrega.php" method="post">
    <a type='submit' name="entrega" onclick='openPopup()'><h2>->Entrega </h2></a>
      <div id='carrinho' style='display: none;'>
        <div  class='content-carrinho ' >
        <a class="fechar" id="close-doar"  onclick='closePopup()'>&times;</a><BR>
 
            <input type='radio'  id=pix name='pag' value= 'pix'>
            <span for='pix' class="material-symbols-outlined">
qr_code_2</span><label>PIX</label><br>

            <input type='radio'  id='cartao' name='pag' value= 'cartao'>
            <span for='cartao' class="material-symbols-outlined">
credit_card
</span><label>CARTÃO</label><br> 

            <input type='submit' name='conf' value= '->Confirmar'>
        </div>
    </div></form>
  
    <script>
        function openPopup() {
            document.getElementById('carrinho').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('carrinho').style.display = 'none';
        }
    </script>
</body>
</html>
