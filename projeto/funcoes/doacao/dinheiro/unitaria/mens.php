<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
            
    $_SESSION['id_par'] = $par;

    $sql_code= "SELECT * FROM parceiro WHERE id_par='$par'";
    $sql_query= $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

    foreach ($sql_query as $dados)
    {
        $id = $dados['id_par'];
        $email = $dados['email'];

        echo $email;
    }
    
?>