<?php
    include_once("../../conexaoBD.php");
    $tabela="carrinho";
    $id = "id_car"; 
    $pesq= "id_user, id_pro, cor, tamanho, qtd, valor";

    if(!isset($_SESSION))
    {
        session_start();
    }
    $_SESSION['alter'] = $_GET['codigo']; //id_pro
    $edit = $_SESSION['alter'];
    echo $edit;


    
    $sql_code = "SELECT $pesq FROM $tabela WHERE $id = $edit";
    $sql_query= $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
    
    foreach ($sql_query as $dades)
        {
            $id_pro = $dades['id_pro'];
            echo $id_pro;

        }

    if (!$sql_query)
    {
         die(' Query Inválida: ' . mysqli_error($conexao));
            
    } 
    
    //caso não ocorra uma alteração de dados
        $sqlPesq = "SELECT * FROM $tabela WHERE $id = $edit";
        $pesquisa= $conexao->query($sqlPesq) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
    
        if (!$pesquisa) 
        {
            die(' Query Inválida: ' . mysqli_error($conexao));
        } 

        foreach ($pesquisa as $dados)
        {
            $categoria = $dados['id_pro'];
            $produto = $dados ['prod'];
            $preco  = $dados['preco'];
            $quantidade = $dados['qtd'];
            $modelo = $dados['modelo'];
            $outros = $dados['outros'];

        }

?>