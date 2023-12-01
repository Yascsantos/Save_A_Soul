<?php
    include_once("../../../../conexaoBD.php");
    if(!isset($_SESSION))
    {
        session_start();
    }

    //pegando o id da categoria
    $_SESSION['id_cat'] = $_GET['codigo'];
    $id_cat = $_SESSION['id_cat'];

    //selecionando o produto pelo id da categoria
    $sql= "SELECT * FROM produto WHERE id_cat = '$id_cat'";
    $instrucao = mysqli_query($conexao,$sql);
	
	if (!$instrucao) 
    {
        die(' Query Inválida: ' . mysqli_error($conexao));

    }

    else 
    {
        //pegando id do produto
        foreach($instrucao as $dados)
        {
            $_SESSION['id_prod'] = $dados['id_pro'];
            $id = $_SESSION['id_prod'];
        }


        $sql_01 = "DELETE FROM imgpro WHERE id_pro ='$id'";
        $inst_01= mysqli_query($conexao,$sql_01);
        if (!$inst_01) 
        {
            die(' Query Inválida: ' . mysqli_error($conexao));
    
        } 
    
        $sql_02 = "DELETE FROM cores WHERE id_pro ='$id'";
        $inst_02= mysqli_query($conexao,$sql_02);
        if (!$inst_02) 
        {
            die(' Query Inválida: ' . mysqli_error($conexao));
    
        } 
    
        $sql_03 = "DELETE FROM tamanhos WHERE id_pro ='$id'";
        $inst_03= mysqli_query($conexao,$sql_03);
        if (!$inst_03) 
        {
            die(' Query Inválida: ' . mysqli_error($conexao));
    
        } 
    
        $sql_04 = "DELETE FROM carrinho WHERE id_pro ='$id'";
        $inst_04= mysqli_query($conexao,$sql_04);
        if (!$inst_04) 
        {
            die(' Query Inválida: ' . mysqli_error($conexao));
    
        } 
    
        $sql_05 = "DELETE FROM pedido WHERE id_pro ='$id'";
        $inst_05= mysqli_query($conexao,$sql_05);
        if (!$inst_05) 
        {
            die(' Query Inválida: ' . mysqli_error($conexao));
    
        } 
        $sql_06 = "DELETE FROM armazena WHERE id_pro ='$id'";
        $inst_06= mysqli_query($conexao,$sql_06);
        if (!$inst_06) 
        {
            die(' Query Inválida: ' . mysqli_error($conexao));
    
        } 

        $sql_code = "DELETE FROM produto WHERE id_pro ='$id'";
        $pesquisa = mysqli_query($conexao,$sql_code);
        
        if (!$pesquisa) 
        {
            die(' Query Inválida: ' . mysqli_error($conexao));
    
        } 


            $sql_cod = "DELETE FROM categoria WHERE id_cat = '$id_cat'";
            $requery = mysqli_query($conexao,$sql_cod);
            
            if (!$requery) 
            {
                die(' Query Inválida: ' . mysqli_error($conexao));
            } 
            else 
            {                    
                mysqli_close($conexao);
                header ('location: ../listagem/list.php');
                exit;
            }
    

    

    }

        mysqli_close($conexao);
		header ('location: ../listagem/list.php');	
		exit;
    
?>