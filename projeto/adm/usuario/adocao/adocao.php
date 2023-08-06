<?php
    include_once("../../../../conexaoBD.php");

    if(!isset($_SESSION))
    {
        session_start();
    }
    $cod = $_SESSION['id_u'];
    echo $cod;

    if(isset($_POST['Registrar']))
    {
        $texto = $_POST['texto'];  
    }

    else
    {
        echo "<br> dados não enviados";
    }



    $tabela="descricao_ado";
    $campos= "id_user, texto"; 
    $sql = "INSERT INTO $tabela ($campos) 
                VALUES ('$cod','$texto')";
            
    $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
            
        if (!$instrucao) 
        {
            die(' Query Inválida: ' . mysqli_error($conexao));

        } 
        else 
        {
            mysqli_close($conexao);
            header ('location:listagem.php');
            exit;
        }
?>

