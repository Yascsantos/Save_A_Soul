<?php
	include_once("../../conexaoBD.php");
	$tabela="user";
    
    if(!isset($_SESSION))
    {
        session_start();
    }

    $user = $_SESSION['id_cad'];

	if (isset($_POST['finalizar'])) 
	{
        $cep = $_POST['cep'];
        $pais = $_POST['pais'];
        $estado = $_POST['estado'];
		$cidade = $_POST['cidade'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $numero = $_POST['numero'];

        //Script para atualizar um registro na tabela no Banco de Dados
        $sql = "UPDATE $tabela SET  
                cep = '$cep', 
                pais = '$pais', 
                estado = '$estado', 
                cidade = '$cidade', 
                bairro = '$bairro', 
                rua = '$rua', 
                numero = '$numero' 
                WHERE id_user = '$user'";
                    
        $instrucao = mysqli_query($conexao,$sql);
    
        if ($instrucao) 
        {
            mysqli_close($conexao);
            header ('Location:../login/login.php');
            exit;
    
        } 
        else 
        {
            die(' Query Inválida: ' . mysqli_error($conexao));
        }

	}
		

?>

