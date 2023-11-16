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

       
        
        echo "
    <style>   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap'); div{
   
    font-family: 'Poppins', sans-serif;
    background-color: rgba(255, 255, 255, 0.993);
    padding: 30px 40px;

    border-bottom:1px solid black;
      
    }
    img{
        height:300px;
        margin-left:10%;
    }</style>
    <div>
        <h3  align = 'center'>Olá $nome, para garantir a segurança dos seus dados, <br>
        mandaremos as informações para a doação no seu e-mail: $email.</h3>";
        echo "<a href='final.php?&codigo=".$dados['id_par']."'></a>";
       
        echo" <img src='thanks.png'>Obrigado por sua colaboração!</div>";
    }
    
?>