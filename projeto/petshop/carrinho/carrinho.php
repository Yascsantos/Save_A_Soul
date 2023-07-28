<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>
<body>
</body>
</html>

<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_user = $_SESSION['id_user']; 
    $id = $_SESSION['id_p'];

    include_once("../../conexaoBD.php");
    $sql= "SELECT preco FROM produto where id_pro = $id";     
    $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

    foreach($instrucao as $dados)
    {
        $pre = $dados['preco'];
    }

    if(isset($_POST['salvar']))
    {
      $tam = $_POST['tamanho'];
      $cor = $_POST['cor'];
      $qtd = $_POST['qtd'];
    }

    $valor = $pre * $qtd;


    $tabela="carrinho";
    $campo= "id_user, id_pro, cor, tamanho, qtd, valor"; 

    $sql_code = "INSERT INTO $tabela ($campo) 
    VALUES ('$id_user','$id','$cor', '$tam', '$qtd', '$valor')";

    $pesquisa= $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

    if (!$pesquisa) 
    {
        die(' Query Inválida: ' . mysqli_error($conexao));
    } 
    else 
    {
        mysqli_close($conexao);
        header ('location:../../adm/produtos/produtos/listagem/grade_nova.php');
        exit;
    }




    
  


?>