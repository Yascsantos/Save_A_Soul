<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adotar</title>
</head>
<body>
    <H2>Lar voluntário</H2>
    <p>
        Muitos animais  quando ficam em situação de rua por muito tempo dentem a desacostumar a lidar com humanos. 
        Para ajudar eles a se readaptarem a ONG Save a Soul desenvolveu um projeto de parceria com todos que 
        tiverem desejo de ajudar.     
    </p>
        
    <p>Consiste em levar o animal para uma casa onde ele terá contato com outras pessoas para se readaptar.</p>
    <p><b>OBS:</b> Caso necessário a ONG ajudará a mantê-lo durante o período da sua reabilitação. </p>

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
    
    //IMAGENS 
    $query= "SELECT * FROM imgani WHERE id_ani = $id";
    $busca = mysqli_query($conexao,$query);
    
    foreach ($busca as $dados) 
    {
        echo "
        <img src=".$dados['img']."  width='100px' height='100px'>
        ";
    }
    echo "<br><br>";
    
    //ANIMAIS
    $sql= "SELECT * FROM animal where id_ani = $id";
    $instrucao = mysqli_query($conexao,$sql);
    foreach ($instrucao as $exibe) 
    {
        $nome = $exibe['nome_ani'];
        $raca = $exibe['raca'];
        $porte = $exibe['porte'];
        $sexo = $exibe['sexo'];

        echo "Esse(a) é o(a) $nome. <br> Ele(a) é um(a) $raca, de porte $porte e um(a) $sexo.";
        echo "<br><br>";
        echo "Deseja ajuda-lo? ";
        echo "<a href='abrigo.php?codigo=$id'>Sim</a>";
        echo "<a href='../../adm/animais/listagem/grade.php'>   Não</a>";

    }
?>   