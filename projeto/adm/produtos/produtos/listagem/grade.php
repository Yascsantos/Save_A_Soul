<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
</head>
<body>
    <h1>Pet Shop</h1>

<?php
    include_once("../../../../conexaoBD.php");
    $sql= "SELECT * FROM produto";
    $instrucao = mysqli_query($conexao,$sql);
    echo "
    <style>
    body{
        background-size:1500px 900px;
        background-image:url(../../../../index/imgs/fundo1.jpg);
        background-position: cr ;
        background-repeat: no-repeat;
        color:white ;
       
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
     padding: 8px;
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
     
    echo "<table>";
    echo " 
        <tr>
            <th>-----------------------------------------<th>
            <th align='center'></th>
            <th> </th>
        </tr> 

        <tr>
            <th align='center'></th>
            <th> </th>
        </tr>

        <tr>
            <th align='center'></th>
            <th></th>
        </tr>

        <tr></tr>
        <tr></tr>
        ";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <tr>
            <td align='center'><a href='../../../../petshop/perfil.php?&codigo=".$exibe['id_pro']."'><img src=".$exibe['img_pro']." alt='Imagem padrão' width='100px' height='100px'></a></td>
            <td></td>
        </tr>

        <tr>
            <td align='center'><a href='../../../../petshop/perfil.php?&codigo=".$exibe['id_pro']."'>".$exibe['prod']."</td>
            <td></td>
        </tr>

        <tr>
            <td align='center'>R$".$exibe['preco']."</td>
            <td></td>
        </tr> 

        <tr></tr><tr></tr>
        <tr>
            <td>--------------------------------<td>
        </tr>
        ";

    }
    echo"</table>";



?>

</body>
</html>
