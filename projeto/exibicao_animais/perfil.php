<?php
        include_once("../conexaoBD.php");

        if(!isset($_SESSION))
        {
            session_start();
        }
    
        $_SESSION['id_ani'] = $_GET['codigo']; //id_ani
        $id = $_SESSION['id_ani'];
    
        if($_GET['codigo'] == "" && $_GET['codigo'] == 0)
        {
    
        }    
    ?>
    <?php
        //IMAGENS 
        $sql= "SELECT * FROM imgani WHERE id_ani = $id";
        $instrucao = mysqli_query($conexao,$sql);
    
        echo "
        <table> 
            <tr>
                <th align='center'></th>
                <th> </th>
            </tr>";
    
        foreach ($instrucao as $exibe) 
        {
            echo "
            <tr>
                <td align='center'><img src=".$exibe['img']."  width='100px' height='100px'></td>
                <td></td>
            </tr>
            ";
        }
        echo"</table>";
    
    
    
        //PRODUTOS
        $sql_code= "SELECT * FROM animal WHERE id_ani = $id";
        $pesquisa = mysqli_query($conexao,$sql_code);
        
        echo "<table>";
        foreach ($pesquisa as $exibe) 
        {
            echo"
                <br>
                <tr>
                    <td align='center'>Nome: </td>
                    <td align='center'>".$exibe['nome_ani']."</td>
                    <td></td>
                </tr>
    
                <tr>
                    <td align='center'>Raça: </td>
                    <td align='center'>".$exibe['raca']."</td>
                    <td></td>
                </tr> 

                <tr>
                    <td align='center'>Tamanho: </td>
                    <td align='center'>".$exibe['porte']."</td>
                    <td></td>
                </tr>
    
                <tr>
                    <td align='center'>Sexo: </td>
                    <td align='center'>".$exibe['sexo']."</td>
                    <td></td>
                </tr> 

                <tr>
                    <td align='center'><button><a href='../funcoes/adotar.html'>Adote</a><td></button>
                    <td align='center'><button><a href='../funcoes/lar.html'>Seja voluntário</a><td></button>

                </tr>
        
                <tr></tr><tr></tr>
            ";
        }
        echo "</table>";
    
        
    
?>