<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem do produto</title>
</head>
<Style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
    main{
  
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  min-height: 10vh;

}
.prod{
    padding: 10px;
    display: flex;
}
    
a {
    
      font-size: 0.9rem;
      text-decoration:none;
      font-size: 0.9rem;
      font-weight:600;
      color: black;
      
    }
   
    a:hover{
      color:#3a3a3b;
    }
    .encontro{
       
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
    width: 400px;

    font-family: 'Poppins', sans-serif;
    padding: 30px 40px;
    text-align: justify;
    }
.img{
   
    border-bottom: 1px solid black;
}

body{
        font-family: 'Poppins';
        background-size:cover;
        background-image:url(../../../../index/imgs/fundo.jpg);

       
    }

</style>
<body>
    <main>
    <div class='encontro' > 
  
    <a href="pro.php">Voltar</a>
  
<?php
    include_once("../../../../../conexaoBD.php");

    
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

        echo "
      
      ";
        echo " <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
       
     
        
         a{
         font-family: 'Poppins', sans-serif;
         font-size: 0.9rem;
         font-size: 0.9rem;
         font-weight:600;
         color:#333235;
         text-decoration:none;
         }
         
         
         a:hover{
         color:white;
         }
         
         table, th, td {
         padding: 8px;
         top:auto;
      
        
         }
     
            
            table {
            border-collapse: collapse;
            margin: auto;
            border-radius:20px;
            backdrop-filter: blur(40px);
            }
    
            th{
            font-weight: bold;
        
            }
             
         }
      
       
         </style>";
;

        //PRODUTOS
    $sql_code= "SELECT * FROM produto WHERE id_pro = $id";
    $pesquisa = mysqli_query($conexao,$sql_code);    

    echo "<table>";
    foreach ($pesquisa as $exibe) 
    {
      
      echo'  <tr> 
        <th><h3>Descrição do produto</h3></th></tr>';
         echo "
    <tr> 
            <tr>
               
                <td align='center'>Nome: </td>
                <td align='center'>".$exibe['prod']."</td>
                <td></td>
            </tr>

            <tr>
                <td align='center'>Preço: </td>
                <td align='center'>R$".$exibe['preco']."</td>
                <td></td>
            </tr> 

            <tr>
                <td align='center'>Modelo: </td>
                <td align='center'>".$exibe['modelo']."</td>
                <td></td>
            </tr> 

            
         
            <tr>
              <td></td>

              <td align='center'>  <h3 ><a href='../../../../../imagens_pro/imagens.php?&codigo=".$id."'>Imagens</a></h3></td>
              <td></td>

            </tr>
    <th align='center'><h3>Tamanhos disponivéis:</h3></th>
    <th align='center'><h3>Cores disponivéis</h3></th></tr>
        ";
    }
   


    //tamanho
    $sql= "SELECT * FROM tamanhos WHERE id_pro = $id";
    $instrucao = mysqli_query($conexao,$sql);
     

    foreach ($instrucao as $exibe) 
    {
        echo "     <tr> <td align='center'>".$exibe['tamanho']."</td>
            
    
        ";

    }

    //cores
        $code= "SELECT * FROM cores WHERE id_pro = $id";
        $busca = mysqli_query($conexao,$code);
        foreach ($busca as $exibe) 
        {
            echo "
                    <td align='center'>".$exibe['cor']."</td>
                
            </tr>
            ";
            echo"</table>";
        
        }


    

?></div>
</body>
</html>