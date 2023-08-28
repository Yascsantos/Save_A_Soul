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
    
        foreach ($instrucao as $exibe) 
        {
            echo "
        <img src=".$exibe['img']."  width='100px' height='100px'>
           
            ";
        }
    
    
    
    
        //PRODUTOS
        $sql_code= "SELECT * FROM animal WHERE id_ani = $id";
        $pesquisa = mysqli_query($conexao,$sql_code);
        
        foreach ($pesquisa as $exibe) 
        {
            echo"
            <style>
               @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
        
            * {
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
                }
                body{
                    background-size:1500px 900px;
                    background-image:url(../index/imgs/fundo1.jpg);
                    background-repeat: no-repeat;
                    color:white ;
                   
                }
            
             a{
             font-family: 'Poppins', sans-serif;
             font-size: 0.9rem;
             font-size: 0.9rem;
             font-weight:600;
             color:#333235;
             }
             
             
             a:hover{
             color:white;
             }
             
             table, th, td {
             padding: 8px;
             width: 50%;
             top:auto;
          
            
             }
             h2{
             font-size: 30px;
             text-align: center;
             }
          
                
                table {
                border-collapse: collapse;
                margin: auto;
                border-radius:20px;
                background-color: rgba(255, 255, 255, 0.4);
                backdrop-filter: blur(40px);
                }
        
                th{
                font-weight: bold;
            
                }
                 
             }
             </style>
             <table>
             <td align='center'>  Nome: </td>
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
                    <td align='center'><button><a href='../funcoes/adocao/adotar.php?&codigo=".$id."'>Adote</a><td></button>
                    <td align='center'><button><a href='../funcoes/abrigo/lar.php?&codigo=".$id."'>Seja voluntário</a><td></button>

                </tr>
        
                <tr></tr><tr></tr>
            ";
        }
        echo "</table>";
    
        
    
?>