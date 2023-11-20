<?php
    include_once("../../../../conexaoBD.php");
    $tabela="produto";
    $campo= "id_cat, prod, preco, modelo"; 

  if(isset($_POST['cadastrar']))
  {
    $cat = $_POST['cat'];
    $prod = $_POST['prod'];
    $preco = $_POST['preco'];
    $mod = $_POST['mod'];

    
  }

  $sql = "INSERT INTO $tabela ($campo) 
            VALUES ('$cat','$prod','$preco', '$mod')";
		
	$instrucao = mysqli_query($conexao,$sql);
		
	if (!$instrucao) 
	{
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 
	else 
	{
		
    $sql_code= "SELECT id_pro FROM produto WHERE prod = '$prod'";
    $sql_query= $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

    foreach ($sql_query as $dados)
    {
        $pro = $dados['id_pro'];
        if(!isset($_SESSION))
        {
            session_start();
        }
        $_SESSION['id_pro'] = $pro;
    }

    mysqli_close($conexao);
		header ('location:./cor/form.php');
		exit;
	}
?>