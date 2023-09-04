<?php
    include_once("../../../conexaoBD.php");
    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_u = $_SESSION['id_u']; 

    $sql_query = "SELECT * FROM adocao WHERE id_user = $id_u";
    $query = $conexao->query($sql_query) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

    foreach($query as $exibe)
    {
        $id_user = $exibe['id_user'];
        $id_ado = $exibe['id_ado'];


    }

    if (empty($id_user))
    {
        echo "O usuário não marcou nenhuma entrevista para adoção ainda <br><br>";
        echo "<title>Lembrete!!</title>
        <a href= '../../../../usuario/listagem.php'>Voltar</a> <br><br>";
    }

    else 
    {
        echo "<table>";
        echo "
        <tr>
            <td align='center'>DATA</td>     
            <td align='center'>HORÁRIO</td>  
            <td align='center'>ANIMAL</td>     
            <td align='center'>RAÇA</td>     
            <td align='center'>PORTE</td> 
            <td align='center'>SEXO</td>     
            <td align='center'>STATUS</td>
            <td align='center'></td>
        </tr>
        ";
        foreach($query as $dade)
        {
            $id_ani = $dade['id_ani'];
            $data = $dade['data_entre'];
            $hora = $dade['horario'];
            $status = $dade['status'];

            $sql= "SELECT * FROM animal where id_ani = $id_ani";     
            $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
            foreach($instrucao as $dados)
            {
                $nome = $dados['nome_ani'];
                $raca = $dados['raca'];
                $porte = $dados['porte'];
                $sexo = $dados['sexo'];
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
        
                    echo "

                        <tr>  
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