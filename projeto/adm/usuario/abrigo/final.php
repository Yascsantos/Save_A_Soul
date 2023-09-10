<?php
    include_once("../../../conexaoBD.php");
    //id_user
    if(!isset($_SESSION))
    {
        session_start();
    }
    $id = $_SESSION['codigo'];

    $sql= "SELECT * FROM voluntario where id_vol = $id";     
    $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
    foreach($instrucao as $cod)
    {
        $id_ado = $cod['id_ado'];
        $id_ani = $cod['id_ani'];
        $sta = $cod['status'];

    }

    if ($sta == "Aprovado")
    {    
        $sql_code= "SELECT * FROM animal where id_ani = $id_ani";     
        $code= $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
        foreach($code as $dados)
        {
            $stt = $dados['status'];
            $mod = $dados['modalidade'];
        }
        $moda = "abrigo";
        $status = "indisponivel";
    
            $code = "UPDATE voluntario SET 
                    status = '$status',
                    modalidade = '$moda' 
                    WHERE id_ani = $id_ani";
            $codigo= $conexao->query($code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));		
            if ($instrucao) 
            {
                //echo "Foi mané";
                mysqli_close($conexao);
                header ('location: ../listagem.php');
                exit;
    
            } 
    
    }

    else if ($sta == "Reprovado")
    {
        $sql_code= "SELECT * FROM animal where id_ani = $id_ani";     
        $code= $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
        foreach($code as $dados)
        {
            $stt = $dados['status'];
            $mod = $dados['modalidade'];
        }
        $moda = "---";
        $status = "disponivel";
    
            $code = "UPDATE animal SET 
                    status = '$status',
                    modalidade = '$moda' 
                    WHERE id_ani = $id_ani";
            $codigo= $conexao->query($code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));		
            if ($instrucao) 
            {
                //echo "Foi mané";
                mysqli_close($conexao);
                header ('location: ../listagem.php');
                exit;
    
            } 

    }



?>