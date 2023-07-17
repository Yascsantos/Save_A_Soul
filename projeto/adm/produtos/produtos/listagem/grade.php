<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
</head>
<body>
    <h1>Pet Shop</h1>

<?php
    include_once("filtro.php");



    if(isset($_POST['pesq']))
    {
        if(!isset($_SESSION))
        {
            session_start();
        }
    
        $_SESSION['cat'] = $_POST['categoria']; //id_pro
        $cat = $_SESSION['cat'];

        //se o campo for nulo
            if ($cat == "" && $cat== "0")
            {
                include_once("../../../../conexaoBD.php");
                $sql_code= "SELECT * FROM produto";
                $pesquisa = mysqli_query($conexao,$sql_code);
            
            
                echo "<table>";
                echo " 
                    <tr>
                        <th>-----------------------------------------<th>
                        <th align='center'></th>
                        <th> </th>
                    </tr> 
            
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
                    <tr>
                        <td>--------------------------------<td>
                    </tr>
                    ";
            
                }
                echo"</table>";
    
        }


        //se o filto for selecionado
            include_once("../../../../conexaoBD.php");
            $sql_code= "SELECT * FROM produto Where id_cat = $cat ";
            $pesquisa = mysqli_query($conexao,$sql_code);
        
        
            echo "<table>";
            echo " 
                <tr>
                    <th>-----------------------------------------<th>
                    <th align='center'></th>
                    <th> </th>
                </tr> 
        
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
                <tr>
                    <td>--------------------------------<td>
                </tr>
                ";
        
            }
            echo"</table>";
    
    }
    //Se o filtro NÃO for assionado
        else 
        { 
            include_once("../../../../conexaoBD.php");
            $sql_code= "SELECT * FROM produto";
            $pesquisa = mysqli_query($conexao,$sql_code);
        
        
            echo "<table>";
            echo " 
                <tr>
                    <th>-----------------------------------------<th>
                    <th align='center'></th>
                    <th> </th>
                </tr> 
        
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
                <tr>
                    <td>--------------------------------<td>
                </tr>
                ";
        
            }
            echo"</table>";
    }



?>

</body>
</html>
