<?php
      include_once("protect.php");
?>


        <!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    
           
            <title></title>
        </head>

<body>

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
    .sobre-produto{
      margin: center;
       display:flex;
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
    width: 50%;
    height:50px;
    background: #080808;
    margin-right: 20%;
    margin-top: 5px;
    color: white;
    font-size: 20px;
  }

 input {
    background-color: rgba(255, 255, 255, 0.32);
    border-radius: 20px;
    outline: none;
    border: 2px solid transparent;
    padding: 15px;
    font-size: 15px;
    color: #616161;
    transition: all 0.4s ease;
}
a{
    color: hsl(257, 11%, 88%);
    text-decoration: none;
}
form  input:focus{
    border-color: #adb5a0;
}
    </style>
    <div class='sobre-produto'> 
        
            <th align='center'></th>
            <th> </th>
        </tr>";

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
       
        echo "<div class='info-prod'>";
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
            <p for=".$exibe['cor'].">".$exibe['cor']."</p></div>
            ";
    
        }
        echo "<br>";

    echo "
   
        <div>Quantidade: 
        <input type='number' placeholder='Quantidade' name='qtd'><br>
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