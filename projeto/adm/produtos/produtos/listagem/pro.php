<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Listagem dos produtos</title>
</head>
<body>
    <h1> Listagem dos produtos </h1>
    <a href="../cadastro/form.php"> Cadastrar + produtos </a><br>
    <a href="../pg02.html"> Voltar</a> <br>
    <br> <br>

<?php
    include_once("../../../../conexaoBD.php");
    $sql= "SELECT  id_pro AS cod, nome_cat AS categoria, prod AS produto, preco, qtd AS quantidade, tamanho, cor, modelo, outros,img_pro 
                FROM produto p 
	            INNER JOIN categoria cat ON p.id_cat = cat.id_cat";
     
    $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));


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
            <th align='center'></th>
            <th></th>
            <th></th>
            <th></th>

            <th align='center'>Imagem padrão</th>
            <th> </th>
            <th align='center'>Código</th>
            <th> </th>
            <th align='center'>Categoria</th>
            <th></th>
            <th align='center'>Produto</th>
            <th></th>
            <th align='center'>Preço</th>
            <th></th>
            <th align='center'>Quantidade</th>
            <th></th>
            <th align='center'>Tamanho</th>
            <th></th>
            <th align='center'>Cor</th>
            <th></th>
            <th align='center'>Modelo</th>
            <th></th>
            <th align='center'>Outros</th>
            <th></th>
            <th></th>
            <th></th>
            <th align='center'></th>
            <th></th>

            <th></th>
            <th></th>
            <th></th>
            <th></th>


        </tr>";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <tr>
            <td align='center'><a href='../../../../imagens_pro/pg03.php?&id=".$exibe['cod']."'> + Imagem(s)</a></td> 
            <td></td>            
            <td></td>
            <td></td>

            <td align='center'><a href='../cadastro/pg04.php?&codigo=".$exibe['cod']."'><img src=".$exibe['img_pro']." alt='Imagem padrão' width='100px' height='100px'></a></td>
            <td></td>
            <td align='center'>".$exibe['cod']."</td>
            <td></td>
            <td align='center'>".$exibe['categoria']."</td>
            <td></td>
            <td align='center'>".$exibe['produto']."</td>
            <td></td>
            <td align='center'>R$".$exibe['preco']."</td>
            <td></td>
            <td align='center'>".$exibe['quantidade']."</td>
            <td></td>
            <td align='center'>".$exibe['tamanho']."</td>
            <td></td>
            <td align='center'>".$exibe['cor']."</td>
            <td></td>
            <td align='center'>".$exibe['modelo']."</td>
            <td></td>
            <td align='center'>".$exibe['outros']."</td>
            <td></td>
            <td></td>
            <td></td>

            <td align='center'><a href='../delete/delete.php?&codigo=".$exibe['cod']."'>Apagar registo</a></td> 
            <td></td>
            <td></td>
            <td align='center'><a href='../update/alter.php?&codigo=".$exibe['cod']."'>Alterar registro </a></td>

        </tr>
        ";
    }

    echo"</table>";



?>
  </div>

</div>
</main>
</body>
</html>
