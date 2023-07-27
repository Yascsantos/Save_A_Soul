<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <a href="../../index.html">Voltar</a>
</body>
</html>

<?php
    include_once("../../../conexaoBD.php");

    $sql= "SELECT * FROM user";
    $instrucao = mysqli_query($conexao,$sql);

    foreach ($instrucao as $exibe) 
    {
        echo "
        <style>
        body{
            background-image: url(../../index/imgs/fundo1.jpg);
            background-size: 100% 100%;
            background-position: 50%  20%;
           }
           @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
    
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            }
         
        
         a{
         font-family: 'Poppins', sans-serif;
         font-size: 0.9rem;
         font-size: 0.9rem;
         font-weight:600;
         color:#333235;
         }
         
         
         a:hover{
         color:#33323591;
         }
         
         table, th, td {
         padding: 20px;
         width: 50%;
         top:auto;
      
        
         }
         h2{
         font-size: 30px;
         text-align: center;
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
         echo "<body>";
         echo"<br><br><br><br><br><br><br><br><br><br><br>";
         echo "<center>
       
              
        <table> 
            <tr>
                <th align='center'>ID</th>
                <th> </th> 
                <th align='center'>Usuário</th>
                <th></th>
                <th align='center'>Nome</th>
                <th></th>
                <th align='center'>E-mail</th>
                <th></th>
                <th align='center'>Telefone</th>
                <th></th>
            </tr>";
    
        foreach ($instrucao as $exibe) 
        {
            echo "
            <tr>
                <td align='center'>".$exibe['id_user']."</td>
                <td></td>  
                <td align='center'>".$exibe['usuario']."</td>
                <td></td> 
                <td align='center'>".$exibe['nome']."</td>
                <td></td> 
                <td align='center'>".$exibe['email']."</td>
                <td></td> 
                <td align='center'>".$exibe['telefone']."</td>
                <td></td> 
                <td align='center'><a href='../descricao/page.php?&codigo=".$exibe['id_user']."'>Considerações</a></td>
                <td></td>
    
            </tr>
            ";
        }
        echo"</table>
        ";
    
    }

?>
