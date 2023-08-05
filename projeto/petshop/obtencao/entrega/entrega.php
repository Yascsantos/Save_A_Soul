<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entega</title>
</head>
<body>
    <h2>Escolha a forma de pagamento</h2>
</body>
</html>
<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_user = $_SESSION['id_user']; 
    
    include_once("../../../conexaoBD.php");

    if(isset($_POST['entrega']))
    {
        echo "
            <form action='' method='post'>
                <input type='radio'  id=pix name='pag' value= 'pix'>
                <label for='pix'>PIX</label><br>

                <input type='radio'  id='cartao' name='pag' value= 'cartao'>
                <label for='cartao'>CARTÃO</label><br>

                <input type='submit' name='conf' value= 'Confirmar'>

            </form>
        ";    
        
    }
 
    if(isset($_POST['conf']))
    {   
        header ('location:../../../adm/produtos/produtos/listagem/notas/entrega.php');

    }

    
?>