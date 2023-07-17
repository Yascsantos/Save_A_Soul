<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro de categorias</title>
</head>
<body>

</body>
</html>
 


<?php
    
    include_once("../../../../conexaoBD.php");
    $sql= "SELECT * FROM categoria";
    $instrucao = mysqli_query($conexao,$sql);

    echo "<form action='grade.php' method='POST'>";
    echo "<select name='categoria' required>
        <option value='0'>Selecione a categoria</option>
    ";


    foreach ($instrucao as $exibe) 
    {
        echo "<option value=".$exibe['id_cat'].">".$exibe['nome_cat']."</option>";

    }
    echo "</select>";
    echo "<button input type='submit' name='pesq' value='pesq'>Pesquisar</button>";
    echo "</form>";



?>



