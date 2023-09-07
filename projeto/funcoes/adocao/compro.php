<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontro Agenado</title>
</head>
<body>
    <h2>Encontro Agenado</h2>
</body>
</html>
<?php
    include_once("../../conexaoBD.php");

    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_adocao = $_SESSION['id_adocao'];
    $user = $_SESSION['id_user'];

    $sql_code = "SELECT * FROM adocao where id_ado = $id_adocao and id_user = $user";
    $code = mysqli_query($conexao,$sql_code);
    foreach ($code as $dade) 
    {
        $id_ado = $dade['id_ado'];
        $id_ani = $dade['id_ani'];
        $data = $dade['data_entre'];
        $hora = $dade['horario'];
    }

        //USER
        $query= "SELECT * FROM user where id_user = $user";
        $requery = mysqli_query($conexao,$query);
        foreach ($requery as $dados) 
        {
            $nome_user = $dados['nome'];
            $email = $dados['email'];

        }
        

        //ANIMAIS
        $sql= "SELECT * FROM animal where id_ani = $id_ani";
        $instrucao = mysqli_query($conexao,$sql);
        foreach ($instrucao as $exibe) 
        {
            $nome = $exibe['nome_ani'];
            $raca = $exibe['raca'];
            $porte = $exibe['porte'];
            $sexo = $exibe['sexo'];

            echo "Olá ".$nome_user."!<br>  Você marcou um encontro com o(a) $nome. Na data de $data e as $hora. <br> Esperamos você!!<br>";
            echo "OBS: Você receberá as demais informações no seu e-mail:  ".$email." <br>";
            echo "<br><br>";
            echo "<a href='../../adm/animais/listagem/grade.php'>Voltar</a><br><br>";

        }

    


    

?>