
<?php
	if(!isset($_SESSION))
    {
        session_start();
    }

    if ($_SESSION['id_user'] == 0 or  $_SESSION['id_user'] == "")
    {
        header("Location: ../login/login.php");

    }

	include_once("../../conexaoBD.php");
	$tabela="user";
    $campo= "id_user";
	$id= $_SESSION['id_user'];

	$sql = "select * from $tabela where $campo ='$id'";
	
	$instrucao = mysqli_query($conexao,$sql);
    
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    
    </head>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,200;1,300&family=Righteous&display=swap');
    #endereco{
    font-family: "Poppins";
    text-align: justify;
    background-color: white ;
  
    }
   
    
    </style>
    <body class='fundo'>
    <div id='endereco'>
        
            <b><p>CEP: <?php foreach ($instrucao as $exibe){ echo $exibe['cep'];}?><br>

            País: <?php foreach ($instrucao as $exibe){ echo $exibe['pais'];}?><br>
            
            Estado: <?php foreach ($instrucao as $exibe){ echo $exibe['estado'];}?><br>
        
            Cidade: <?php foreach ($instrucao as $exibe){ echo $exibe['cidade'];}?><br>
        
            Bairro: <?php foreach ($instrucao as $exibe){ echo $exibe['bairro'];}?><br>
        
            Rua: <?php foreach ($instrucao as $exibe){ echo $exibe['rua'];}?><br>
        
            Número: <?php foreach ($instrucao as $exibe){ echo $exibe['numero'];}?></p>
    </div>
    
    </body>
    </html>