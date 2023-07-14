<?php
    include_once("../../../conexaoBD.php");
    $tabela="animal";
    $campo= "nome_ani, raca, porte, sexo"; 

  if(isset($_POST['cadastrar']))
  {
    $nome = $_POST['nome'];
    $raca = $_POST['raca'];
    $porte = $_POST['porte'];
    $sx = $_POST['sx'];

    
  }

    $sql = "INSERT INTO $tabela ($campo) 
            VALUES ('$nome','$raca','$porte', '$sx')";
		
    $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
		
	if (!$instrucao) 
	{
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 
	else 
	{
		mysqli_close($conexao);
		header ('location:../listagem/animais.php');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=c">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Cadastro dos animais</title>
</head>
<body>
    <br>
   <br>
    <main>
        <div class="caixa">
            <div class='espaco'></div>
              <div class="caixa-dados">
   
    <a href="../listagem/animais.php">Listar produtos</a><br>
    <a href="../pg05.html">Voltar</a> 

    <form action="cad.php" method="POST">  
        <div class="input-dados">
        <label>Nome: </label>
        <input type="text" placeholder="Nome do animal" name="nome">
        <label>Raça: </label>
        <input type="text" placeholder="Raça do animal" name="raca">
    
        <label>Porte: </label>
        <input type="text" placeholder="Porte do animal (EX: grande, médio, pequeno)" name="porte" >
    
        <label>Sexo: </label>
        <select name="sx"  required>
            <option value=" " required>Sexo do animal</option>
            <option value="feminino">Feminino</option>
            <option value="masculino">Masculino</option>
         </select>
        <button input type="submit" name="cadastrar" value="Cadastrar animal">Cadastro</button></div>
    </form>
</div>

</div>
</main>

</body>
</html>