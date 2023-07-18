<?php
//filtro

    //montagem do filtro 
    include_once("../../../../conexaoBD.php");
    $sql= "SELECT * FROM categoria";
    $instrucao = mysqli_query($conexao,$sql);

    echo "<form action='fl.php' method='POST'>";
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