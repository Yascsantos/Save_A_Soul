<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    $_SESSION['mensal'] = "Mensal";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plano mensal</title>
</head>
<body>
    <a href="../../../../../index/ajude.php">X</a>

    <div align = 'center'>
    <br><br>
        <h2> PLANO DE DOAÇÃO MENSAL </h2>
        <p>
            No plano de doação mensal, você pode doar um valor para a ajudar o nosso projeto na quantia que você puder e desejar.
            E no dia do mês em que você tiver disponibilidade para fazer essa(s) doação(s).
            <br>
        </p>
        <P>
            Para garantir uma melhor segurança, mandaremos os dados para realizar a doação em seu e-mail. <br>
        </P>

        <p>
            Preencha o formulário abaixo com seu nome, e-mail e uma senha de sua preferencia para podermos mandar os dados a você.
        </P>
    </div>
    <br><br>
    
    <fieldset  align = 'center'>
        <h2> Formulário</h2>
        <form method="post" action="./cad1.php">
            <label for="nome"> Nome:</label>
            <input type="text" name="nome" placeholder="Nome" >
            <br>

            <label for="email"> E-mail:</label>
            <input type="email" name="email" placeholder="E-mail" >
            <br>

            <label for="senha"> Senha:</label>
            <input type="password" name="senha" placeholder="Senha" >
            <br><br>

            <input type="submit" name="cadastrar" value="Cadastrar" >

        </form>
</fieldset>
</body>
</html>