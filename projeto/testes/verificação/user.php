
<?php
    //conexão com o banco
    include_once("../../conexaoBD.php");

    //dados do DB
    $tabela="colaboradores";
    $campo= "usuario"

    $sql_pesq = "select usuario from colaboradores";
    $pesquisa = mysqli_query($conexao,$sql_pesq);

    if (!$pesquisa) 
	{
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 
	else 
	{
		if ($usuario == 0)
        {
            echo "Nome de usuário ja existente, tente outro";
        }
	}

    

    

?>

