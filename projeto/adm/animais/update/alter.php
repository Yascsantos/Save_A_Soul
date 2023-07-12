<!--PHP-->
<?php
	include_once("../../../conexaoBD.php");
	$tabela="produto";
	$id = "id_pro"; 
    $pesq= "id_cat, prod, preco, qtd, tamanho, cor, modelo, outros";
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
            $tamanho = $dados['tamanho'];
            $col = $dados['cor'];
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
                $tam = $_POST['tam'];
                $cor = $_POST['cor'];
                $mod = $_POST['mod'];
                $out = $_POST['out'];
    
            //verificação de campos nulos
                if(empty($cat)) {$cat = $categoria;}
                if(empty($prod)) {$prod = $produto;}
                if(empty($pre)) { $pre = $preco;}
                if(empty($qtd)) { $qtd = $quantidade;}
                if(empty($tam)) {$tam = $tamanho;}
                if(empty($cor)) {$cor = $col;}
                if(empty($mod)) {$mod = $modelo;}
                if(empty($out)) {$out = $outros;}
            
            //Script para atualizar um registro na tabela no Banco de Dados
                $sql = "UPDATE $tabela SET 
                id_cat = '$cat',
                prod = '$prod', 
                preco = '$pre',
                qtd = '$qtd', 
                tamanho = '$tam', 
                cor = '$cor', 
                modelo = '$mod', 
                outros = '$out' 
                WHERE $id = $codigo";
                

                $instrucao = mysqli_query($conexao,$sql);
                if ($instrucao) 
                {
                    mysqli_close($conexao);
                    header ('Location:../listagem/pro.php');
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
    <title>Cadastro dos produtos</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <a href="../pg02.html">Voltar</a> <br>
    <!--<a href="../listagem/list.php">Listagem</a>-->
    <br> <br>
    <form action="" method="post">
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
        <label>Tamanho: </label> <br>
        <input type="text"  name="tam" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['tamanho'];}?>">
        <br>
        <label>Cor: </label> <br>
        <input type="text" name="cor" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['cor'];}?>">
        <br>
        <label>Modelo: </label> <br>
        <input type="text" name="mod" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['modelo'];}?>">
        <br>
        <label>Outros: </label> <br>
        <input type="text"  name="out" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['outros'];}?>">
        <br><br>

        <input type="submit" name="alterar" value="Alterar produto">
    </form>


</body>
</html>