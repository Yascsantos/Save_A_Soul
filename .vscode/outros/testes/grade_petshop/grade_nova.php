<?php
     include_once("filtro.php");
     include_once("barra.php");

     include_once("../../../../conexaoBD.php");
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
                 <td align='center'><a href='../../../../petshop/perfil.php?&codigo=".$exibe['id_pro']."'><img src=".$exibe['img_pro']." alt='Imagem padrão' width='100px' height='100px'></a></td>
                 <td></td>
             </tr>
                
             <tr>
                 <td align='center'><a href='../../../../petshop/perfil.php?&codigo=".$exibe['id_pro']."'>".$exibe['prod']."</td>
                 <td></td>
             </tr>
                
             <tr>
                 <td align='center'>R$".$exibe['preco']."</td>
                 <td></td>
             </tr> 
                
             <tr></tr><tr></tr>
             ";
                
     }
     echo"</table>";

?>