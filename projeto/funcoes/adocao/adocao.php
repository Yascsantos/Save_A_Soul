<?php
    include_once("../../conexaoBD.php");

    if(!isset($_SESSION))
    {
        session_start();
    }
    $user = $_SESSION['id_user'];
    $id = $_SESSION['id_ani'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontro</title>
</head>
<body>
    <h1>Seu encontro</h1>
    <p>Antes de adota-lo você precisa conhece-lo. <br>
        Preencha o formulário a baixo para marcarmos seu encontro.
    </p>

    <h2>Formulário</h2>
    <form method="post" action="adocao.php">
        <input type="date" name="data"/>
        <input type="time" name="horas"/>
        <input type="submit" name="enviar" value="Enviar" />
    </form>
</body>
</html>
<?php

    if(isset($_POST['enviar']))    
    {
        $data = $_POST['data'];
        $hora = $_POST['horas'];
    
        $tabela="adocao";
        $campo= "id_user, id_ani, data_entre, horario"; 

        $sql = "INSERT INTO $tabela ($campo) 
        VALUES ('$user','$id','$data', '$hora')";

        $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

        if (!$instrucao) 
        {
            die(' Query Inválida: ' . mysqli_error($conexao));
        } 
        else 
        {
            mysqli_close($conexao);
            header ('location:../../adm/animais/listagem/grade.php');
            exit;
        }

    }



?>