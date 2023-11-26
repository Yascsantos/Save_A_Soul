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
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
    main{
  
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  min-height: 10vh;

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

</style>
</head>
<body>
<main>
    <div class='encontro' >
    <h1>Alteração de dados do animal</h1>
    <a href="../pg05.html">Voltar</a> <br>
    <form action="" method="post">
    <input type="hidden" name="codigo" value="<?= $edit;?>" />
 
        <label>Nome: </label> 
        <input type="text"  name="nome" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['nome_ani'];}?>">
       
        <label>Raça: </label> 
        <input type="text" name="raca" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['raca'];}?>">
        
        <label>Porte: </label> 
        <input type="text" name="porte" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['porte'];}?>">
        
        <label>Sexo: </label> <br>
        <input type="text"  name="sx" placeholder="<?php foreach ($pesquisa as $dados){ echo $dados['sexo'];}?>">
        <br>
        <input type="submit" name="alterar" value="Alterar dados"></div>
    </form>
    </div>

</main>

</body>
</html>