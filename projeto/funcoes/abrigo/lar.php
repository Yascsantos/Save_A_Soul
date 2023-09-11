<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adotar</title>
</head>
<body>
    <p>
    Quando os animais ficam muito tempo em situação de rua, eles desaprendem a lidar com humanos.
    Para reverter esse problema a Save a Soul, propôs um projeto em colaboração com a comunidade de 
    “Lar voluntário” onde os voluntários ajudariam esses animais a se reabilitarem, com o auxilio da ONG 
    (em medicamentos, comida, vacinas, etc.)
    </p>
        
</body>
</html>
<?php
    include_once("../../conexaoBD.php");

    if(!isset($_SESSION))
    {
        session_start();
    }
    $_SESSION['id_ani'] = $_GET['codigo']; //id_ani
    $id = $_SESSION['id_ani'];
    
    //ANIMAIS
    $sql= "SELECT * FROM animal where id_ani = $id";
    $instrucao = mysqli_query($conexao,$sql);
    foreach ($instrucao as $exibe) 
    {
        $nome = $exibe['nome_ani'];
        $raca = $exibe['raca'];
        $porte = $exibe['porte'];
        $sexo = $exibe['sexo'];

        echo "<p>
                O nome do animal faz parte desse projeto. Deseja ajuda-lo?
                <a href='abrigo.php?codigo=$id'>Sim</a>
                <a href='../../adm/animais/listagem/grade.php'>   Não</a>
            </p>";

        echo "MAIS INFORMAÇÕES SOBRE ELE(A): <br> 
            RAÇA: $raca <br>
            PORTE: $porte <br>
            SEXO: $sexo <br> .";
        echo "<br><br>";

    }
?>   