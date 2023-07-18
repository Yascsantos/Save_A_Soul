<?php
        //caso o filto seja selecionado
        if(isset($_POST['pesq']))
        {
            if(!isset($_SESSION))
            {
                session_start();
            }
        
            $_SESSION['cat'] = $_POST['categoria']; //id_pro
            $cat = $_SESSION['cat'];
     
            //se o campo for nulo 
            if ($cat == "0")
            {
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


                   
            }
    
    
                //campo NÃO for nulo
                include_once("../../../../conexaoBD.php");
                $sql_query= "SELECT * FROM produto Where id_cat = $cat ";
                $requery = mysqli_query($conexao,$sql_query);
                    
                    
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
                    
                foreach ($requery as $dados) 
                {
                    echo "
                        <tr>
                         <td align='center'><a href='../../../../petshop/perfil.php?&codigo=".$dados['id_pro']."'><img src=".$dados['img_pro']." alt='Imagem padrão' width='100px' height='100px'></a></td>
                         <td></td>
                        </tr>
                    
                        <tr>
                            <td align='center'><a href='../../../../petshop/perfil.php?&codigo=".$dados['id_pro']."'>".$dados['prod']."</td>
                            <td></td>
                        </tr>
                    
                        <tr>
                            <td align='center'>R$".$dados['preco']."</td>
                            <td></td>
                        </tr> 
                    
                        <tr></tr><tr></tr>
                        ";
                    
                }
                echo"</table>";
    
    
        }
    
        else
        {
            //se o filtro NÃO for selecionado 
            $sql= "SELECT * FROM produto";
            $instrucao = mysqli_query($conexao,$sql);
    
            echo"<table>";
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
    
        }
    echo "<a href='grade_nova.php'>Voltar a página inicial</a>";

?>