<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de categorias</title>
</head>
<body>
<main>
        <div class="caixa">
            <div class='espaco'></div>
              <div class="caixa-dados">
    <h1> Listagem das categorias dos produtos </h1>
    <a href="../pg.html"> Voltar </a> <br>
    <a href="../cadastro/form.html"> Cadastrar categorias </a>
    <br> <br>

<?php
    include_once("../../../../conexaoBD.php");
    $sql= "SELECT * FROM categoria";
    $instrucao = mysqli_query($conexao,$sql);


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
            <th></th>
            <th></th>
            <th> </th>
            <th align='center'>Código</th>
            <th> </th>
            <th align='center'>Nome da categoria</th>
            <th></th>
            <th></th>
            <th></th>

        </tr>";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <tr>
            <td align='center'><a href='../update/alter.php?&codigo=".$exibe['id_cat']."'>Alterar </a></td>
            <td></td>
            <td></td>
            <td align='center'>".$exibe['id_cat']."</td>
            <td></td>
            <td align='center'>".$exibe['nome_cat']."</td>
            <td></td>
            <td align='center'><a href='../delete/drop.php?&codigo=".$exibe['id_cat']."'>Delete</a></td> 
            <td></td>
        </tr>
        ";
    }
    echo"</table>";


?>

</body>
</html>
