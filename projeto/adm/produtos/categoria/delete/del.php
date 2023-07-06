<?php
	include_once("../../../../conexaoBD.php");

    //imagens
        if(!isset($_SESSION))
        {
            session_start();
        }
        $id = $_SESSION['id_pro'];        
        $sql = "DELETE FROM imgpro WHERE id_pro = '$id'";
        $instrucao = mysqli_query($conexao,$sql);
        
        if (!$instrucao) {
            die(' Query Inválida: ' . mysqli_error($conexao));

        }
        else 
        {
            //produto
                $sql_code = "DELETE FROM produto WHERE id_pro ='$codigo'";
                $pesquisa = mysqli_query($conexao,$sql_code);
                
                if (!$pesquisa) {
                    die(' Query Inválida: ' . mysqli_error($conexao));
            
                } 
                else 
                {
                    //Categoria
                        $codigo = $_GET['codigo'];
                        $sql_query = "DELETE FROM categoria WHERE id_cat ='$codigo'";
                        $requery = mysqli_query($conexao,$sql_query);
                        
                        if (!$pesquisa) {
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
    

            mysqli_close($conexao);
            header ('location: ../listagem/list.php');
            exit;
        }































/*
    //Produto
    $codigo = $_GET['codigo'];
	$sql = "DELETE FROM produto WHERE id_cat ='$codigo'";
	
	$instrucao = mysqli_query($conexao,$sql);
	
	if (!$instrucao) {
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 
    else 
    {
        //categoria
        $sql_code = "DELETE FROM categoria WHERE id_cat ='$codigo'";
		$pesquisa = mysqli_query($conexao,$sql_code);
		
		if (!$pesquisa) {
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
	}*/