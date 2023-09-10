<?php
    include_once("../../../conexaoBD.php");
    //id_user
    if(!isset($_SESSION))
    {
        session_start();
    }
    $cod = $_SESSION['id_u'];
    $_SESSION['codigo'] = $_GET['codigo'];
    $id = $_SESSION['codigo'];

    $sql= "SELECT * FROM voluntario where id_vol = $id";     
    $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

    foreach($instrucao as $cod)
    {
        $id_ani = $cod['id_ani'];
    
    }
    $moda = "---";
    $status = "disponivel";

    $code = "UPDATE animal SET 
            status = '$status',
            modalidade = '$moda' 
            WHERE id_ani = $id_ani";
    $codigo= $conexao->query($code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

    $sql_code = "DELETE FROM voluntario WHERE id_vol = '$id' ";
    $query= $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));		

    if ($query) 
    {
        mysqli_close($conexao);
        header ('location: ../listagem.php');
        exit;

    } 

?>