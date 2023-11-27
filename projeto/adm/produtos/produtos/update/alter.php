<!--PHP-->
<?php
	include_once("../../../../conexaoBD.php");
	$tabela="produto";
	$id = "id_pro"; 
    $pesq= "id_cat, prod, preco, modelo";
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
            $modelo = $dados['modelo'];

        }

    //variáveis do form
        if (isset($_POST['alterar'])) 
        {
                $codigo = $_POST['codigo'];
                $cat = $_POST['cat'];
                $prod = $_POST['prod'];
                $pre = $_POST['preco'];
                $mod = $_POST['mod'];
    
            //verificação de campos nulos
                if(empty($cat)) {$cat = $categoria;}
                if(empty($prod)) {$prod = $produto;}
                if(empty($pre)) { $pre = $preco;}
                if(empty($mod)) {$mod = $modelo;}
            
            //Script para atualizar um registro na tabela no Banco de Dados
                $sql = "UPDATE $tabela SET 
                id_cat = '$cat',
                prod = '$prod', 
                preco = '$pre',
                modelo = '$mod'
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

</head>
<body>

  
<main>
        <div class='encontro'>
  
         <a href="../cadastro/infos/pro.php">Voltar </a>
   
    <h1>Cadastro de Produtos</h1>
    <form action="" method="post">
  
    <input type="hidden" name="codigo" value="<?= $edit;?>" />
   
    <label>Categoria do produto: </label> <br>
    <?= include ("../listagem/cat.php"); ?> 
    <br>  
        <label>Produto: </label> <br>
        <input type="text"  name="prod" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['prod'];}?>">
      
        <label>Preço: </label>
        <input type="number" name="preco" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['preco'];}?>">
          
        <label>Modelo: </label> 
        <input type="text" name="mod" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['modelo'];}?>">

    <br>

        <input type="submit" name="alterar" value="Alterar produto">
   
    </form>

    </div>
</main>
</body>
</html>