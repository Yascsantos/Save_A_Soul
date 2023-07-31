<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Listagem dos animais</title>
    <Style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
        body{
        font-family: 'Poppins';
        background-size:1500px 900px;
        background-image:url(../../../index/imgs/fundo1.jpg);

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
    padding: 50px 0;
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
    height: 100px;
    text-align: center;
    border-radius: 3px;
  }
    </style>
</head>
<body>

  
    <header id="menu">
      <nav>
   <img src="../../../petshop/imgs/logo.png" >
     <ul class="nav-list">
          <li> <a href="../cadastro/form.html">CADASTRAR MAIS ANIMAIS</a></li>
          <li> <a href="../pg05.html ">VOLTAR</a></li>
          <br>
       </ul>

       </nav>
</header>
<section class="sobre" id="sobre">
        <div class="max-width">
  
    <h2 class='title'> Listagem dos animais </h2>
    <div class='msg'> <br>Clique na imagem para cadastrar a imagem padrão do animal </p>
</div>
</section>
<?php
    include_once("../../../conexaoBD.php");
    $sql= "SELECT * FROM animal";     
    $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));


    echo "
    <style>
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
     width: 50%;
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
     button{
     width: 50%;
     height: 47px;
     background: #adb5a0;
     border-radius: 20px;
     outline: none;
     border: none;
     margin-top: 15px;
     color: white;
    margin-left: 20%;
     font-size: 16px;
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
