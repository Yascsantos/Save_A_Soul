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
        body{
        font-family: 'Poppins';
        background-size:1500px 900px;
        background-image:url(../../../../../petshop/imgs/fundo1.jpg);

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
  section{
    padding: 55px 0;
  }
  section .title{
    color: #fff;
    font-family: 'poppins';
    text-align: center;
    font-size: 40px;
    font-weight: 500;
    margin-bottom: 60px;
    padding-bottom: 20px;
    position: relative;
  }
  section .title::before{
    content: "";
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 180px;
    height: 3px;
    background: #ffffff;
    transform: translateX(-50%);
  }
  section .title::after{
    COLOR: #ffffff;
    position: absolute;
    bottom:-12px;
    left: 50%;
    font-size: 20px;
    background:  #d4987e;
    color: #f1e8ec;
    padding: 5px;
    border-radius: 10%;
    transform: translateX(-50%);
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
    height: 130px;
    text-align: center;
    border-radius: 3px;
  }
    </style>
</head>
<body>
<header id="menu">
      <nav>
   <img src="../../../../../index/imgs/logo.png" >
     <ul class="nav-list">
          <li> <a href="../form.php">CADASTRAR + PRODUTOS</a></li>
          <li> <a href="../../pg02.html">VOLTAR</a></li>
          <br>
       </ul>

       </nav>
</header> 

<section class="sobre" id="sobre">
        <div class="max-width">
    <h2 class='title'> Cadastre mais informações dos produtos</h2>
    <div class='msg'><br>Clique na imagem para cadastrar, mudar ou deletar a imagem padrão do produto<br><br></div>
</div></section>
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
     padding: 4px;
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

   
     echo "
    <table> 
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
