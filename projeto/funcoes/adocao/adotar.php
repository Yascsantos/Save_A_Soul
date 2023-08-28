<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adotar</title>
</head>
<body>
    <p>
        Muitas pessoas querem um animalzinho em casa para fazer companhia porém não tem condições de comprar um.<br>
        Em contrapartida, muitos animais querem e precisam de um lar.
    </p>
        
    <p> 
        Porque não resolver esses dois problemas de uma vez só??
        Por isso a ONG desenvolveu um sistema de adoção para que todos possam ter um bichinho em suas casas sem 
        precisar pagar para isso.
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
        echo "Deseja adota-lo? ";
        echo "<a href='adocao.php?codigo=$id'>Sim</a>";
        echo "<a href='../../adm/animais/listagem/grade.php'>   Não</a>";

    }
?>   