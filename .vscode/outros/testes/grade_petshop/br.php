<?php
        if(isset($_POST['pesquisar']))
        {
            if(!isset($_SESSION))
            {
                session_start();
            }
              
            $_SESSION['prod'] = $_POST['barra']; 
            $prod = $_SESSION['prod'];
    
    
            //se o campo NÃO for nulo 
            include_once("../../../../conexaoBD.php");
            $sql= "SELECT * FROM produto WHERE prod = '$prod'";
            $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
                               
                               
            echo "<table>";                           
            foreach ($instrucao as $exibe) 
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
          
    
            //Campo nulo 
            if ($prod == "" )
            {
                include_once("filtro.php");
            }
    
        }
    
        echo "<a href='grade_nova.php'>Voltar a página inicial</a>";

    
?>