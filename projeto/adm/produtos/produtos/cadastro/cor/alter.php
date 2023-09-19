<?php
	include_once("../../../../../conexaoBD.php");
	$tabela="cores";
	$id = "id_cor"; 
    $pesq="cor";
	$edit = $_GET['codigo'];

		
    $sqlPesq = "SELECT $pesq FROM $tabela WHERE $id= $edit";
	$pesquisa = mysqli_query($conexao,$sqlPesq);
	
	if (!$pesquisa)
	{
        die(' Query Inválida: ' . mysqli_error($conexao));
		
	} 
	
	if (isset($_POST['alterar'])) 
    {
		$codigo = $_POST['codigo'];
		$cor = $_POST['cor'];
		
		$sql = "UPDATE $tabela SET 
			cor = '$cor' 
			WHERE $id = $codigo";
			
		$instrucao = mysqli_query($conexao,$sql);
		
		if (!$instrucao) 
        {
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} 
        else 
        {
			mysqli_close($conexao);
            header ('location: list.php');

			exit;
		}
	}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=c">
	<link rel="stylesheet" href="../../../../css/style.css">
    <title>Alteração de tamanho</title>
</head>
<style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
        body{
        font-family: 'Poppins';
        background-size:100% 100%;
        background-image:url(../../../../../index/imgs/fundo-s.jpg);
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
    </style>
<body>

<header id="menu">
      <nav>
   <img src="../../../../../petshop/imgs/logo.png" >
     <ul class="nav-list">
          <li>
          <a href="../infos/pro.php"> Voltar </a> </li>
          <li> <a href="form.php"> Cadastrar + cores </a></li>
       </ul>

       </nav>
</header>
<main>
<div class="caixa">
            <div class='espaco'></div>
              <div class="caixa-dados">
    <h1>Alteração de tamanho</h1>
    <form action="" method="post">
	<div class='input-dados'>
        <input type="hidden" name="codigo" value="<?= $edit;?>" />

        <label>Cor: </label> 
        <input type="text" placeholder="Cor" name="cor"><br>
        <button input type="submit" name="alterar" value="Alterar tamanho">Alterar</button>
		</div>
    </form>
    </div>
</div>
</div>
</main>


</body>
</html>