
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
form  input:focus{
    border-color: #adb5a0;
}
    </style>
        <div class='sobre-produto'> 
    <table> 
        <tr>
            <th align='center'></th>
            <th> </th>
        </tr>";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <tr>
            <td align='center'><img src=".$exibe['img']." width='100px' height='100px'></td>
            <td></td>
        </tr>
        ";
    }
    echo"</table>";



    //PRODUTOS
    $sql_code= "SELECT * FROM produto WHERE id_pro = $pro";
    $pesquisa = mysqli_query($conexao,$sql_code);
    
    echo "<table>";
    foreach ($pesquisa as $exibe) 
    {
        ECHO "
        <!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>".$exibe['prod']."</title>
        </head>
       
      ";

  
        
        echo"
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
        echo "  <input type='radio' class='radio' id=".$exibe['tamanho']." name='tamanho' value=".$exibe['tamanho'].">
        <label for=".$exibe['tamanho'].">".$exibe['tamanho']."</label><br>
     
        ";

    }

    //cores
        $code= "SELECT * FROM cores WHERE id_pro = $pro";
        $busca = mysqli_query($conexao,$code);
        
        echo "<label>Cores disponivéis</label><br>";
        foreach ($busca as $exibe) 
        {
      echo "  <input type='radio' class='radio' id=".$exibe['cor']." name='cor' value=".$exibe['cor'].">
            <label for=".$exibe['cor'].">".$exibe['cor']."</label><br>
            ";
    
        }

    echo "
   
    <div>Quantidade: 
    <input type='number' placeholder='Quantidade' name='qtd'><br>
    <a href='../adm/produtos/produtos/listagem/pet/grade_nova.php'> Voltar a comprar</a>
</div>
";

echo "<br><br><input type='submit' name='salvar' value= 'Adicionar ao carrinho' class='comprar'></input>";
echo "</div>";
 echo "</div>";
echo "</form>";


?>
  </html>
