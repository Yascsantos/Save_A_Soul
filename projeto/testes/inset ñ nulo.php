<?php
    include_once("../conexaoBD.php");

    $sql = "SELECT * FROM colaboradores WHERE id_user ='2'";
	
	// executando instrução SQL
	$instrucao = mysqli_query($conexao,$sql);

    foreach ($instrucao as $dados)
    {
        $nome= $dados['nome'];
        echo $nome;
        echo "<br> <br>";

        $telefone = $dados['telefone'];
        echo $telefone;
        echo "<br> <br>";

    }
  

?>