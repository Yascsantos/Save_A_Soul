
<?php
    include_once("../conexaoBD.php");

    if(!isset($_SESSION))
    {
        session_start();
    }
    $_SESSION['car'] = $_GET['carrinho']; //id_pro
    $car = $_SESSION['car'];

    $_SESSION['pro'] = $_GET['pro']; //id_pro
    $pro = $_SESSION['pro'];


    if($_GET['carrinho'] == "" && $_GET['carrinho'] == 0)
    {

    }    

    //IMAGENS 
    $sql= "SELECT * FROM imgpro WHERE id_pro = $pro";
    $instrucao = mysqli_query($conexao,$sql);

    echo "
   
   

    <style>
   
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&family=Ubuntu:wght@400;500;700&display=swap');
    body{
        background-image:url('imgs/fundo-s.jpg');
           font-family:'Roboto';
       }
   
    .sobre-produto{
      margin-left:10% ;
      width:80%;
       display:flex;
       background-color: rgba(255, 255, 255, 0.4);
       backdrop-filter: blur(40px);
       padding: 30px 40px;
       border-radius: 20px 20px ;
   }
   
   .img img{
      width:300px;
      heigth:300px;
      
   }
   .info-prod {
       margin-top: auto;
       padding:30px;
       text-aling:center;
       font-family:'Roboto';
       color: #4c5838;

   }
   .tam {
  display:flex;
  
}
label{
    color: #4c5838;
    font-weight: bold;
    display: block;
}
.comprar{
    align-items: center;
    height:50px;
    background: #080808;
    color: white;
    font-size: 20px;
  }

  .num{
    width:20%;

  }
 input {
    background-color: rgba(255, 255, 255, 0.32);
    border-radius: 20px;
    outline: none;
    border: 2px solid transparent;
    padding: 10px;
    font-size: 15px;
    color: #616161;
    transition: all 0.4s ease;
}
form  input:focus{
    border-color: #adb5a0;
}
a{
    color: hsl(257, 11%, 88%);
    text-decoration: none;
}
    </style>
        <div class='sobre-produto'> ";


        foreach ($instrucao as $exibe) 
        {
            echo "
            <div class='img'>
        <img src=".$exibe['img'].">
            
            </div>
         ";
        
        }
    
     

        echo"<div class='info-prod'>";
    //PRODUTOS
    $sql_code= "SELECT * FROM produto WHERE id_pro = $pro";
    $pesquisa = mysqli_query($conexao,$sql_code);
   
    foreach ($pesquisa as $exibe) 
    {
        

   
        
        echo"
        <title>" .$exibe['prod']."</title>
   
       <p> ".$exibe['outros']."</p>
       <h2>".$exibe['prod']." / ".$exibe['modelo']."</h2>
        <h3 align='center' > Preço:R$".$exibe['preco']."</h3>
            
           
        ";
    }
  

    echo "<form action='./carrinho/carrinho.php' method='POST'>
";
    //tamanho
    $sql= "SELECT * FROM tamanhos WHERE id_pro = $pro";
    $instrucao = mysqli_query($conexao,$sql);

    echo "<label>Tamanhos disponivéis</label><br>";
    foreach ($instrucao as $exibe) 
    {
        echo "  <div class='tam'> <input type='radio' class='radio' id=".$exibe['tamanho']." name='tamanho' value=".$exibe['tamanho'].">
        ".$exibe['tamanho']."</div>
     
        ";

    }

    //cores
        $code= "SELECT * FROM cores WHERE id_pro = $pro";
        $busca = mysqli_query($conexao,$code);
        
        echo "<label>Cores disponivéis</label><br>";
        foreach ($busca as $exibe) 
        {
      echo "  <div class='tam'><input type='radio' class='radio' id=".$exibe['cor']." name='cor' value=".$exibe['cor'].">
        ".$exibe['cor']."</div>
            ";
    
        }

    echo "
   
    <div>Quantidade: 
    <input type='number' placeholder='Qnt' name='qtd' class='num'><br>
    <a href='../adm/produtos/produtos/listagem/pet/grade_nova.php' id='fecharEAbriLink'> Voltar a comprar</a>
</div>
";

echo "<br><br><input type='submit' name='salvar' value= 'Adicionar ao carrinho' class='comprar'></input>";
echo "</div>";
 echo "</div>";
echo "</form>";


?>
  </html>
  <style>
  

    /* Adicione media queries para estilos responsivos */
    @media screen and (max-width: 768px) {
        .sobre-produto {
            flex-direction: column; 

        }
    }
</style>
