<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Listagem de categorias</title>
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
    body{
        background-size: cover;
            background-position: cover;
            background-image:url(../../../../index/imgs/fundo.jpg);
    
           
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
        width: 700px;
         margin-top: 200px;
      
        font-family: 'Poppins', sans-serif;
        background-color: rgba(255, 255, 255, 0.993);
        padding: 30px 40px;
        text-align: justify;
        }

    </style>
<body>

        


<main>
        <div class='encontro' > 
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
</main>

</body>
</html>
