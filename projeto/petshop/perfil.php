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
   
</body>
</html>
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
    
    echo "<div class='info-prod'>";
    foreach ($pesquisa as $exibe) 
    {
       

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

    echo "<label>Tamanhos</label><br>";
    foreach ($instrucao as $exibe) 
    {
        echo "  <input type='radio' class='radio' id=".$exibe['tamanho']." name='tamanho' value=".$exibe['tamanho'].">
        <label for=".$exibe['tamanho'].">".$exibe['tamanho']."</label><br>
     
        ";
   
    }
    

    //cores
        $code= "SELECT * FROM cores WHERE id_pro = $id";
        $busca = mysqli_query($conexao,$code);
        
        echo "<label>Cores disponivéis</label><br>";
        foreach ($busca as $exibe) 
        {
            echo "  <input type='radio' class='radio' id=".$exibe['cor']." name='cor' value=".$exibe['cor'].">
            <label for=".$exibe['cor'].">".$exibe['cor']."</label><br>
            ";
    
        }
        echo "<br>";

    echo "
   
        <div>Quantidade: 
        <input type='number' placeholder='Quantidade' name='qtd'><br>
        <a href='../adm/produtos/produtos/listagem/pet/grade_nova.php'> Voltar a comprar</a>
</div>
    ";
   
 echo "<br><br><input type='submit' name='salvar' value= 'Adicionar ao carrinho'></input>";
 echo "</div>";
     echo "</div>";
    echo "</form>";



?>

