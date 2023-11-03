<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade de produtos</title>
</head>
<body>
    <h1>Listagem dos produtos cadastrados</h1>
    <a href="../../pg02.html">Voltar</a>
</body>
</html>
<?php
     include_once("../../../../../conexaoBD.php");
     $sql_code= "SELECT * FROM produto";
     $pesquisa = mysqli_query($conexao,$sql_code);
                
                
     echo "<table>";
     echo "                        
         <tr>
             <th align='center'></th>
             <th> </th>
         </tr>
                
         <tr>
             <th align='center'></th>
             <th></th>
         </tr>
                
         <tr></tr>
         <tr></tr>
         ";
                
     foreach ($pesquisa as $exibe) 
     {
         echo "
            <tr>
                <td align='center'>------------------------------</td>
                <td></td>
            </tr> 
        
             <tr>
                 <td align='center'><a href='list.php?&codigo=".$exibe['id_pro']."'><img src=".$exibe['img_pro']." alt='Imagem padrão' width='100px' height='100px'></a></td>
                 <td></td>
             </tr>
                
             <tr>
                 <td align='center'><a href='list.php?&codigo=".$exibe['id_pro']."'>".$exibe['prod']."</td>
                 <td></td>
             </tr> 
                
             <tr></tr><tr></tr>
             ";
                
     }
     echo "<tr>
                <td align='center'>------------------------------</td>
                <td></td>
            </tr>";
     echo"</table>";

?>
