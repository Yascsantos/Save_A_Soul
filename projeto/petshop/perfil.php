<?php
      include_once("protect.php");
?>

<?php
    include_once("../conexaoBD.php");
    include("protect.php");


    if(!isset($_SESSION))
    {
        session_start();
    }
    $_SESSION['id_p'] = $_GET['codigo']; //id_pro
    $id = $_SESSION['id_p'];


    if($_GET['codigo'] == "" && $_GET['codigo'] == 0)
    {

    }    

    //IMAGENS 
    $sql= "SELECT * FROM imgpro WHERE id_pro = $id";
    $instrucao = mysqli_query($conexao,$sql);

    
    echo "
   
    <style>
 @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&family=Ubuntu:wght@400;500;700&display=swap');
    body{
      
        font-family:'Roboto';}
   
    .sobre-produto{
        box-shadow:2px 3px 10px 5px rgba(0, 0, 0, 0.2);
      border-top:1px solid black;
       display:flex;
       padding: 30px 40px;
       width:80%;
       margin:auto;
      
   }
   
   .img img{
    padding: 10px 50px 50px 50px;
      width:300px;
      heigth:300px;
      
   }
   .info-prod {
    border-left:1px solid black;

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
    width:30%;

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




    //PRODUTOS
    $sql_code= "SELECT * FROM produto WHERE id_pro = $id";
    $pesquisa = mysqli_query($conexao,$sql_code);
    
  
    foreach ($pesquisa as $exibe) 
    {
       
        echo "
        <title>" .$exibe['prod']."</title>
   <div class='info-prod'>";
        echo"
       <p> ".$exibe['outros']."</p>
       <h2>".$exibe['prod']." / ".$exibe['modelo']."</h2>
        <h3 align='center' > Preço:R$".$exibe['preco']."</h3>
            
           
        ";
    }
  

    echo "<form action='./carrinho/carrinho.php' method='POST'>
";
    //tamanho
    $sql= "SELECT * FROM tamanhos WHERE id_pro = $id";
    $instrucao = mysqli_query($conexao,$sql);

    echo "<label>Tamanhos</label>";
    foreach ($instrucao as $exibe) 
    {
        echo "<div class='tam'>  <input type='radio' class='radio' id=".$exibe['tamanho']." name='tamanho' value=".$exibe['tamanho'].">
        ".$exibe['tamanho']."</div>
     
        ";
   
    }
    

    //cores
        $code= "SELECT * FROM cores WHERE id_pro = $id";
        $busca = mysqli_query($conexao,$code);
        
        echo "<label>Cores </label>";
        foreach ($busca as $exibe) 
        {
            echo "  <div class='tam'><input type='radio' class='radio' id=".$exibe['cor']." name='cor' value=".$exibe['cor'].">
            ".$exibe['cor']."</div>
            ";
    
        }
        echo "<br>";

    echo "
   
        <div>Quantidade: 
        <input type='number' placeholder='Qtd' name='qtd' class='num'><br>
        <a href='../adm/produtos/produtos/listagem/pet/grade_nova.php'> Voltar a comprar</a>
</div>
    ";
   
 echo "<br><br><input type='submit' name='salvar' value= 'Adicionar ao carrinho' class='comprar'/>";
 echo "</div>";
     echo "</div>";
    echo "</form>";



?>

   
</body>
</html>