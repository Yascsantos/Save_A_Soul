<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de categorias</title>
</head>

<body>
<?php
    
    include_once("../../../../conexaoBD.php");
    $sql= "SELECT * FROM categoria";
    $instrucao = mysqli_query($conexao,$sql);

    foreach ($instrucao as $exibe) 
    {
        echo "
<style>
  .radio  input [type='radio']{
color: #4c5838;
background-color: red;
}
</style>";
        echo "  <input type='radio' class='radio' id=".$exibe['nome_cat']." name='cat' value=".$exibe['id_cat'].">
        <label for=".$exibe['nome_cat'].">".$exibe['nome_cat']."</label><br>
        ";

    }


?>


</body>
</html>
