<?php
	include_once("../../../conexaoBD.php");

    if(!isset($_SESSION))
    {
        session_start();
    }
            
    $par = $_SESSION['id_par'];

    $sql_code= "SELECT * FROM parceiro WHERE id_par='$par'";
    $sql_query= $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

    foreach ($sql_query as $dados)
    {
        $nome = $dados['nome'];
        $email = $dados['email'];

        echo "<a href='final.php?&codigo=".$dados['id_par']."'>FECHAR</a>";
        echo "<br><br><br>";
        echo "<h3  align = 'center'>Olá $nome, para garantir a segurança dos seus dados, <br>
        mandaremos as informações para a doação no seu e-mail: $email.</h3>";

    }
    
?>