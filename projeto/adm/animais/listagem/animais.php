<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Listagem dos animais</title>
</head>
<body>
<!--<<<<<<< HEAD-->
    <h2> Listagem dos animais </h2>
    
    <a href="../cadastro/form.html"> Cadastrar mais animais </a><br>
<!--=======-->
    <h1> Listagem dos animais </h1>
    <a href="../cadastro/form.php"> Cadastrar mais animais </a><br>
<!-- >>>>>> 6019948347ffb6de4c0f820bf4cc1f238c715f99-->
    <a href="../pg05.html"> Voltar</a> <br>
    <br> <br>

<?php
    include_once("../../../conexaoBD.php");
    $sql= "SELECT * FROM animal";     
    $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));


    echo "
    <style>
    body{
        background-size:1500px 900px;
        background-image:url(../../../index/imgs/fundo1.jpg);
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
     color:white;
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
     </style>
   
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
            <th align='center'>Nome</th>
            <th></th>
            <th align='center'>Raça</th>
            <th></th>
            <th align='center'>Porte</th>
            <th></th>
            <th align='center'>Sexo</th>
            <th></th>
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
            <td align='center'><a href='../../../imagens_ani/pg07.php?&id=".$exibe['id_ani']."'> + Imagem(s)</a></td> 
            <td></td>            
            <td></td>
            <td></td>

            <td align='center'><a href='../cadastro/pg06.php?&codigo=".$exibe['id_ani']."'><img src=".$exibe['img_ani']." alt='Imagem padrão' width='100px' height='100px'></a></td>
            <td></td>
            <td align='center'>".$exibe['id_ani']."</td>
            <td></td>
            <td align='center'>".$exibe['nome_ani']."</td>
            <td></td>
            <td align='center'>".$exibe['raca']."</td>
            <td></td>
            <td align='center'>".$exibe['porte']."</td>
            <td></td>
            <td align='center'>".$exibe['sexo']."</td>
            <td></td>
            <td></td>

            <td align='center'><a href='../delete/delete.php?&codigo=".$exibe['id_ani']."'>Apagar registo</a></td> 
            <td></td>
            <td></td>
            <td align='center'><a href='../update/alter.php?&codigo=".$exibe['id_ani']."'>Alterar registro </a></td>

        </tr>
        ";
    }

    echo"</table>";



?>

</body>
</html>
