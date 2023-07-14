<!--PHP-->
<?php
	include_once("../../../conexaoBD.php");
	$tabela="animal";
	$id = "id_ani"; 
    $pesq= "nome_ani, raca, porte, sexo";
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
            $name = $dados['nome_ani'];
            $rac = $dados ['raca'];
            $por  = $dados['porte'];
            $sexo = $dados['sexo'];
        }

    //variáveis do form
        if (isset($_POST['alterar'])) 
        {
            $nome = $_POST['nome'];
            $raca = $_POST['raca'];
            $porte = $_POST['porte'];
            $sx = $_POST['sx'];
            
            //verificação de campos nulos
                if(empty($nome)) {$nome = $name;}
                if(empty($raca)) {$raca = $rac;}
                if(empty($porte)) { $pre = $por;}
                if(empty($sx)) { $sx = $sexo;}
            
            //Script para atualizar um registro na tabela no Banco de Dados
                $sql = "UPDATE $tabela SET 
                nome_ani = '$nome',
                raca = '$raca', 
                porte = '$porte',
                sexo = '$sx' 
                WHERE $id = $edit";
                

                $instrucao = mysqli_query($conexao,$sql);
                if ($instrucao) 
                {
                    mysqli_close($conexao);
                    header ('Location:../listagem/animais.php');
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
    <link rel="stylesheet" href="../../css/style.css">
    <title>Alteração de dados do animal</title>
</head>
<body>
<main>
        <div class="caixa">
            <div class='espaco'></div>
              <div class="caixa-dados">
    <h1>Alteração de dados do animal</h1>
    <a href="../pg05.html">Voltar</a> <br>
    <!--<a href="../listagem/list.php">Listagem</a>-->
    <br> <br>
    <form action="" method="post">
    <input type="hidden" name="codigo" value="<?= $edit;?>" />
   
        <label>Nome: </label> <br>
        <input type="text"  name="nome" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['nome_ani'];}?>">
        <br>
        <label>Raça: </label> <br>
        <input type="text" name="raca" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['raca'];}?>">
        <br>
        <label>Porte: </label> <br>
        <input type="text" name="porte" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['porte'];}?>">
        <br>
        <label>Sexo: </label> <br>
        <input type="text"  name="sx" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['sexo'];}?>">
        <br>
        <button input type="submit" name="alterar" value="Alterar dados">Alterar</button>
    </form>
    </div>

</div>
</main>

</body>
</html>