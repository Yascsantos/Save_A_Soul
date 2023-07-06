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
            $id_pro = $_SESSION['id_prod'];
        }

        //apagando a imagem pelo id do produto
        $sql_code= "DELETE  FROM imgpro WHERE id_pro = '$id_pro'";
        $pesquisa = mysqli_query($conexao,$sql_code);

        if(!$pesquisa)
        {
            die(' Query Inválida: ' . mysqli_error($conexao));
        }

        else 
        {
            //apagando o produto pelo id da categoria
            $sql_query = "DELETE FROM produto WHERE id_cat = '$id_cat'";
            $query = mysqli_query($conexao,$sql_query);
            
            if (!$query) 
            {
                die(' Query Inválida: ' . mysqli_error($conexao));
            } 
            else 
            {
                //apagando a categoria
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
    
    
                mysqli_close($conexao);
                header ('location: ../listagem/list.php');
                exit;
            }

        }

        mysqli_close($conexao);
		header ('location: ../listagem/list.php');	
		exit;
	}
    
?>