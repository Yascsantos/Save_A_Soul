<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Listagem de categorias</title>
</head>
<Style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
        body{
        background-image: url('../../../../index/imgs/fundo-s.jpg');
        background-size: 100% 100%;
        background-position: center;
       }
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');


       table {
      width:80%;
       
        }
    </style>
<body>
<main>
        


<main>
<div class="caixa">

              <div class="caixa-dados">
    <h2> Listagem de categorias dos produtos </h2>
    <a href="../pg.html"> Voltar </a> <br>
<a href="../cadastro/form.html"> Cadastrar categorias </a>



<?php
    include_once("../../../../conexaoBD.php");
    $sql= "SELECT * FROM categoria";
    $instrucao = mysqli_query($conexao,$sql);

     echo "<center>
    <table> 
    
        <tr>
        <th> </th>  <th> </th>
        <th> </th>  <th> </th>
        <th> </th>  <th> </th>
            <th align='center'>Código</th>
            <th> </th>  
            <th> </th>
            <th> </th>
            <th> </th>
            <th align='center'>Nome da categoria</th>
          

        </tr>";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <tr>
            <td align='center'><a href='../update/alter.php?&codigo=".$exibe['id_cat']."'><span class='material-symbols-outlined'>
            app_registration
            </span></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

            <td align='center'>".$exibe['id_cat']."</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td align='center'>".$exibe['nome_cat']."</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td align='center'><a href='../delete/drop.php?&codigo=".$exibe['id_cat']."'><span class='material-symbols-outlined'>
            delete</span></a></td> 
            <td></td>
        </tr>
        ";
    }
    echo"</table>";


?>
</div>
</div>
</div>
</main>
</body>
</html>
