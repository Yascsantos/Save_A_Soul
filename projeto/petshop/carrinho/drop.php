<?php
        include_once("../../conexaoBD.php");

        if(!isset($_SESSION))
        {
            session_start();
        }
        
        $id_user = $_SESSION['id_user']; 

        $tabela="carrinho";
        $campos = "id_car"; //chave primária    
        $codigo = $_GET['codigo'];
	
        $sql = "DELETE FROM $tabela WHERE $campos='$codigo'";
        
        $instrucao = mysqli_query($conexao,$sql);
        
        if (!$instrucao) {
            die(' Query Inválida: ' . mysqli_error($conexao));
    
        } else {
            mysqli_close($conexao);
                header ('location: ../../adm/produtos/produtos/listagem/pet/exibe_car.php');
                
                exit;
        }    
?>