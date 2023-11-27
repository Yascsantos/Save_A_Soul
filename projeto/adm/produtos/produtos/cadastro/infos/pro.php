<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Cadastrar informações</title>
</head>
 <Style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
       
 


  nav {
   
    display: flex;
    justify-content: space-around;
    align-items: center;
    font-family: 'Poppins';
    height: 12vh;
    margin-top:10px;
    margin-left:55%;
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

main{

display: flex;
align-items: center;
justify-content: center;
padding: 20px;
min-height: 10vh;

}
body{
    font-family: 'Poppins';
    background-size:cover;
    background-image:url(../../index/imgs/fundo.jpg);

   
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
 margin-top: 100px;
font-family: 'Poppins', sans-serif;
padding: 30px 40px;
text-align: justify;
}
input label{
color: #4c5838;
font-weight: bold;
display: block;
margin-bottom: 5px;
}

form  input{
width: 20%;
height: 27px;
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
input[type='submit']{
background:#4c5838;
color: #fff;
height: 47px;
}
  .msg{
    background-color: #3a3a3b;
    text-align: center;
    color:white;
  width: 100%;
    position: absolute;
  }
    </style>
</head>
<body>
<nav>
  
  <ul class="nav-list">
       <li> <a href="../form.php">CADASTRAR + PRODUTOS</a></li>
       <li> <a href="../../pg02.html">VOLTAR</a></li>
       <br>
    </ul>

    </nav>
    <div class='msg'><br>Cadastre mais informações dos produtos, clique na imagem para cadastrar, mudar ou deletar a imagem padrão do produto<br><br></div>
  
<?php
    include_once("../../../../../conexaoBD.php");
    $sql= "SELECT  id_pro AS cod, nome_cat AS categoria, prod AS produto, preco, modelo, img_pro 
                FROM produto p 
	            INNER JOIN categoria cat ON p.id_cat = cat.id_cat";
     
    $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));


    echo "
    <style>
    * {
    box-sizing: border-box;
    font-family: 'Poppins';
    }
 
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

 
    
     a{
     font-family: 'Poppins', sans-serif;
     font-size: 12px;
     color:#333235;
     text-decoration:none;
     }
     
     
     a:hover{
     color:#33323591;
     }
     
     table, th, td {
     padding: 7px;
     width: 90%;
     top:auto;
  
    
     }
     h2{
     font-size: 30px;
     text-align: center;
     }
  
        
        table {
        border-collapse: collapse;
        margin: auto;
        }

        th{
        font-weight: bold;
    
        }
         
     }
     </style>";

   
     echo "
    <table class='encontro'> 
    
        <tr>

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
            <th align='center'>Modelo</th>
            <th></th>
            <th align='center'></th>
            <th></th>
            <th align='center'></th>
            <th></th>
            <th align='center'></th>
            <th></th>
            <th align='center'></th>
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

            <td></td>

            <td align='center'><a href='../pg04.php?&codigo=".$exibe['cod']."'><img src=".$exibe['img_pro']." alt='Imagem padrão' width='100px' height='100px'></a></td>
            <td></td>
            <td align='center'>".$exibe['cod']."</td>
            <td></td>
            <td align='center'>".$exibe['categoria']."</td>
            <td></td>
            <td align='center'>".$exibe['produto']."</td>
            <td></td>
            <td align='center'>R$".$exibe['preco']."</td>
            <td></td>
            <td align='center'>".$exibe['modelo']."</td>
            <td></td>
            <td align='center'><a href='../../cadastro/tam/page01.php?&codigo=".$exibe['cod']."'>Gerir tamanhos</a></td>
            <td></td>
            <td align='center'><a href='../../cadastro/cor/page02.php?&codigo=".$exibe['cod']."'>Gerir cores</a></td>
            <td></td>
            <td align='center'><a href='../../../../../imagens_pro/pg03.php?&codigo=".$exibe['cod']."'><span class='material-symbols-outlined'>
            add_photo_alternate
            </span></a></td> 
            <td></td>   
            <td align='center'><a href='../../update/alter.php?&codigo=".$exibe['cod']."'><span class='material-symbols-outlined'>
            app_registration
            </span> </a></td>
            <td></td>
            <td align='center'>
           <a href='../../delete/delete.php?&codigo=".$exibe['cod']."'> <span class='material-symbols-outlined'>
           delete</span></a></td> 
            <td></td>


        </tr>
        ";
    }

    echo"</table>";



?>

</main>
</body>
</html>
