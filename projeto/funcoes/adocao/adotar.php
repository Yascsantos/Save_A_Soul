<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../petshop/css/petshop.css" type="text/css">
    <title>Adotar</title>
</head>
<body> 
<div class="caixa-dados">
    <p>
    
        Muitas pessoas querem um animalzinho em casa para fazer companhia porém não tem condições de comprar um.<br>
        Em contrapartida, muitos animais querem e precisam de um lar.
    </p>
        <br>
    <p> 
        Porque não resolver esses dois problemas de uma vez só??
        Por isso a ONG desenvolveu um sistema de adoção para que todos possam ter um bichinho em suas casas sem 
        precisar pagar para isso.
    </p>


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

        echo "Esse(a) é o(a) $nome. <br> Ele(a) é um(a) $raca, de porte $porte e um(a) $sexo.";
        echo "<br><br>";
        
        echo "Deseja adota-lo? ";
        echo "<a onclick='openPopup()'>Sim</a>
        <div id='popupContainer' style='display: none;'>
        <div  class='popup' >
         <span class='material-symbols-outlined' onclick='closePopup()'>
        close
        </span> 
<iframe href='adocao.php?codigo=$id'></iframe>        </div>
    </div>
    <script>
        function openPopup() {
            document.getElementById('popupContainer').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('popupContainer').style.display = 'none';
        }
    </script>";
        echo "<a href='../../adm/animais/listagem/grade.php'> Não</a>";

    }
?>   </div>
</body>
</html>      