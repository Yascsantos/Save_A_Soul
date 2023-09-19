<!--PHP-->
<?php
	include_once("../../../../conexaoBD.php");
	$tabela="produto";
	$id = "id_pro"; 
    $pesq= "id_cat, prod, preco, qtd, modelo, outros";
	$edit = $_GET['codigo'];

    $sql_code = "SELECT $pesq FROM $tabela WHERE $id = $edit";
    $sql_query= $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

	
	if (!$sql_query)
	{
        die(' Query Inválida: ' . mysqli_error($conexao));
		
	} 

    //caso não ocorra uma alteração de dados
        $sqlPesq = "SELECT * FROM $tabela WHERE $id = $edit";
        $pesquisa= $conexao->query($sqlPesq) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

        //$pesquisa = mysqli_query($conexao,$sqlPesq);

        if (!$pesquisa) 
        {
            die(' Query Inválida: ' . mysqli_error($conexao));
        } 

    //Transformando o array em variáveis de apoio
        foreach ($pesquisa as $dados)
        {
            $categoria = $dados['id_cat'];
            $produto = $dados ['prod'];
            $preco  = $dados['preco'];
            $quantidade = $dados['qtd'];
            $modelo = $dados['modelo'];
            $outros = $dados['outros'];

        }

    //variáveis do form
        if (isset($_POST['alterar'])) 
        {
                $codigo = $_POST['codigo'];
                $cat = $_POST['cat'];
                $prod = $_POST['prod'];
                $pre = $_POST['preco'];
                $qtd = $_POST['qtd'];
                $mod = $_POST['mod'];
                $out = $_POST['out'];
    
            //verificação de campos nulos
                if(empty($cat)) {$cat = $categoria;}
                if(empty($prod)) {$prod = $produto;}
                if(empty($pre)) { $pre = $preco;}
                if(empty($qtd)) { $qtd = $quantidade;}
                if(empty($mod)) {$mod = $modelo;}
                if(empty($out)) {$out = $outros;}
            
            //Script para atualizar um registro na tabela no Banco de Dados
                $sql = "UPDATE $tabela SET 
                id_cat = '$cat',
                prod = '$prod', 
                preco = '$pre',
                qtd = '$qtd', 
                modelo = '$mod', 
                outros = '$out' 
                WHERE $id = $codigo";
                

                $instrucao = mysqli_query($conexao,$sql);
                if ($instrucao) 
                {
                    mysqli_close($conexao);
                    header ('Location:../cadastro/infos/pro.php');
                    exit;

                } 
                else 
                {
                    die(' Query Inválida: ' . mysqli_error($conexao));
                }
        }


?>

<!--FORMULÁRIO-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=c">
    <link rel="stylesheet" href="../../../../adm/css/style.css">
    <title>Cadastro dos produtos</title>
    <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
        body{
        font-family: 'Poppins';
        background-size:100% 100%;
        background-image:url(../../../../index/imgs/fundo-s.jpg);
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
</head>
<body>

    <header id="menu">
      <nav>
   <img src="../../../../petshop/imgs/logo.png" >
     <ul class="nav-list">
          <li> <a href="../cadastro/infos/pro.php">Voltar </a></li>
       </ul>

       </nav>
</header><main>
        <div class="caixa">
            <div class='espaco'></div>
              <div class="caixa-dados">
    <h1>Cadastro de Produtos</h1>
    <form action="" method="post">
        <div class='input-dados'>
    <input type="hidden" name="codigo" value="<?= $edit;?>" />
   
    <label>Categoria do produto: </label> <br>
    <?= include ("../listagem/cat.php"); ?> 
    <br>  
        <label>Produto: </label> <br>
        <input type="text"  name="prod" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['prod'];}?>">
        <br>
        <label>Preço: </label> <br>
        <input type="number" name="preco" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['preco'];}?>">
        <br>
        <label>Quantidade: </label> <br>
        <input type="number" name="qtd" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['qtd'];}?>">
        <br>
        <label>Modelo: </label> <br>
        <input type="text" name="mod" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['modelo'];}?>">
        <br>
        <label>Outros: </label> <br>
        <input type="text"  name="out" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['outros'];}?>">
        <br><br>

        <button input type="submit" name="alterar" value="Alterar produto">Alterar</button>
    </div>
    </form>

    </div>
</div>
</div>
</main>
</body>
</html>