<?php
        //id_user
        if(!isset($_SESSION))
        {
            session_start();
        }
        $_SESSION['id_u']= $_GET['codigo'];
        $cod = $_SESSION['id_u'];
    
    if ($_SESSION['id_u'] == "" && $_SESSION['id_u'] == "0" )
    {

    }
    include_once("../../conexaoBD.php");
    $sql= "SELECT * FROM user WHERE id_user = $cod";
    $instrucao = mysqli_query($conexao,$sql);

    foreach ($instrucao as $exibe) 
    {
        $nome = $exibe['nome'];
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <h1>Informações dos usuários</h1>
    <p>Usuário(a): <b><?php echo $nome;?></b></p>

    <h3><a href="../produtos/produtos/listagem/usuario/compras.php">Pedidos já feitos</a></h3>
    <!--Mudar status-->
    <h3><a href="./adocao/list.php">Status da adoção</a></h3>
    <h3><a href="./abrigo/list.php">Status do abrigo</a></h3>


    <a href="listagem.php">Voltar</a>


</body>
</html>