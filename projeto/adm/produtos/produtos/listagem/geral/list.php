<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem do produto</title>
</head>
<Style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
        body{
        font-family: 'Poppins';
        background-size:1500px 900px;
        background-image:url(../../../../../index/imgs/fundo-s.jpg);

        color:white ;
       
    }
       
  #menu{
  position: fixed;
  width:100%;
  height:110px;
  font-family: 'Poppins';

 
}
img{
  width:100px;
  height:100px;
margin-top:auto;
}

  nav {
    display: flex;
    justify-content: space-around;
    align-items: center;
    font-family: 'Poppins';
    height: 12vh;
  }
  

  .nav-list {
    list-style: none;
    display: flex;
  
  }
  
  .nav-list li {
    letter-spacing: 3px;
    margin-left: 32px;
    margin-top: auto;
   
  }
 

.max-width{
    max-width: 1300px;
    padding: 0 80px;
    margin: auto;
}
#menu a{
    font-family: 'Poppins';
    font-size: 0.9rem;
    text-decoration:none;
    font-size: 0.9rem;
    font-weight:600;
    color:#fcfcfc;
  }
 
  #menu a:hover{
    color:#3a3a3b;
  }
  .msg{
    background-color: #3a3a3b;
    width: 300px;
    height: 100px;
    text-align: center;
    border-radius: 3px;
  }
    </style>
<body>
    
<header id="menu">
      <nav>
   <img src="../../../../../petshop/imgs/logo.png" >
     <ul class="nav-list">
          <li>
  
    <a href="pro.php">Voltar</a><br>
    <br>
       </ul>

       </nav>
</header>
<br><br><br>
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
            background-color: rgba(255, 255, 255, 0.4);
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
                <td align='center'>Outras informações: </td>
                <td align='center'>".$exibe['outros']."</td>
                <td>  <h3><a href='../../../../../imagens_pro/imagens.php?&codigo=".$id."'>Imgens</a></h3></td>
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


    

?>
</body>
</html>