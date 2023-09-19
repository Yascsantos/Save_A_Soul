<?php
    include_once("../../../conexaoBD.php");
    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_u = $_SESSION['id_u']; 

    $num1 = "SELECT * FROM adocao WHERE id_user = $id_u";
    $num2 = $conexao->query($num1) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

    foreach($num2 as $num3)
    {
        $id_user = $num3['id_user'];
    }

    if (empty($id_user))
    {
        echo"
        <style>
        
        @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap');
        body{
            background-image: url(../../imgs/Aviso.gif);
            background-position:center;
            background-size:100% 100%;
        }
                .aviso{
                    margin-left:60%;
                    width:50%;
                    font-size:30px;
                    font-family:'League Spartan';
                    text-align: justify;
                    margin-top:20%;
                }
               .aviso h2{
                
                    color:#AF2A2A;
                }
        
                a{
                    font-family:  'League Spartan';
                    text-decoration:none;
                    font-weight:600;
                    color:green;
                  }
                 
                  a:hover{
                    color:#3a3a3b;
                  }
                
                </style>
                    <title>Lembrete!!</title>
                    
                    <div class='aviso'>
                    <h2>Aviso!!!</h2>
            <title>Lembrete!!</title>
            O usuário não marcou nenhuma<br> entrevista para adoção ainda <br><br>
            <a href= '../listagem.php'>Voltar</a> <br><br></div>
        ";
    }

    else 
    {
    $sql_query = "SELECT * FROM adocao WHERE id_user = $id_u";
    $query = $conexao->query($sql_query) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));


    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Adoções</title>
    </head>
    <body>
        <h1>Pedidos</h1>
        <p>Abaixo estão os animais que você adotou</p>
        <a href= '../../listagem.php'>Voltar</a> <br><br>
    </body>
    </html>
        ";

    echo "<table>";
    echo "
    <tr>
        <td align='center'></td>
        <td align='center'>DATA</td>     
        <td align='center'>HORÁRIO</td>  
        <td align='center'>ANIMAL</td>     
        <td align='center'>RAÇA</td>     
        <td align='center'>PORTE</td> 
        <td align='center'>SEXO</td>     
        <td align='center'>STATUS</td>
        <td align='center'></td>
    </tr>";

    foreach($query as $exibe)
    {
        $id_user = $exibe['id_user'];
        $id_ado = $exibe['id_ado'];
        $id_ani = $exibe['id_ani'];
        $data = $exibe['data_entre'];
        $hora = $exibe['horario'];
        $status = $exibe['status'];

        $sql= "SELECT * FROM animal where id_ani = $id_ani";     
        $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
        foreach($instrucao as $dados)
        {
            $nome = $dados['nome_ani'];
            $raca = $dados['raca'];
            $porte = $dados['porte'];
            $sexo = $dados['sexo'];
    
                echo "
                    <tr>  
                        <td align='center'>
                            <a href='drop.php?&codigo=".$id_ado."'>Deletar registro</a>
                        </td>
                        <td align='center'>
                            ".$data." 
                        </td>
                        
                        <td align='center'>
                            ".$hora."
                        </td>
    
                        <td align='center'>
                            ".$nome."
                        </td>
    
                        <td align='center'>
                            ".$raca."
                        </td>
    
                        <td align='center'>
                            ".$porte."
                        </td>
    
                        <td align='center'>
                            ".$sexo."
                        </td>
    
                        <td align='center'>
                            ".$status."
                        </td>

                        <td align='center'>
                            <a href='form.php?&codigo=".$id_ado."'>Mudar status</a>
                        </td>
    
                </tr>
                ";  
    
            }




    }
}



    echo "</table>";



?>