
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
            <br>
            Nome: ".$exibe['prod']."<br>
            Preço:R$".$exibe['preco']."<br>
            Modelo: 
             ".$exibe['modelo']."<br>
              Outras informações: 
            ".$exibe['outros']."<br>
           
        ";
    }
  

    echo "<form action='./carrinho/carrinho.php' method='POST'>
";
    //tamanho
    $sql= "SELECT * FROM tamanhos WHERE id_pro = $id";
    $instrucao = mysqli_query($conexao,$sql);

    echo "<label>Tamanhos disponivéis</label><br>";
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
   
        <label>Quantidade: </label> 
        <input type='number' placeholder='Quantidade' name='qtd'><br>
        <a href='../adm/produtos/produtos/listagem/pet/grade_nova.php'> Voltar a comprar</a>

    ";
   
 echo "<br><br><input type='submit' name='salvar' value= 'Adicionar ao carrinho'></input>";
 echo "</div>";
     echo "</div>";
    echo "</form>";



?>

