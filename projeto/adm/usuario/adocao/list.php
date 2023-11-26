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
        <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200'/>
        <title>Adoções</title>
    </head>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
    main{
  
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  min-height: 10vh;

}
body{
    font-family: 'Poppins';
    background-size:1500px 900px;
    background-image:url(../../../index/imgs/fundo1.jpg);

   
}
a{
    font-size: 0.9rem;
    text-decoration:none;
    font-size: 0.9rem;
    font-weight:600;
    color:black;
  }
 
  a:hover{
    color:#3a3a3b;
  }
    .encontro{
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
    width: 700px;
     margin-top: 200px;
    font-family: 'Poppins', sans-serif;
    background-color: rgba(255, 255, 255, 0.993);
    padding: 30px 40px;
    text-align: justify;
    }
    input label{
    color: #4c5838;
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

form  input{
    width: 20%;
    height: 27px;
    background-color: rgba(255, 255, 255, 0.32);
    border-radius: 20px;
    outline: none;
    border: 2px solid transparent;
    padding: 15px;
    font-size: 15px;
    color: #616161;
    transition: all 0.4s ease;
}
form  input:focus{
    border-color: #adb5a0;
}
input[type='submit']{
    background:#4c5838;
    color: #fff;
    height: 47px;
}
</style>
    <body>
    <main>
    <div class='encontro' >
        <h1>Pedidos</h1>
        <p>Abaixo estão os animais que esse usuario adotou</p>
        <a href= '../listagem.php'>Voltar</a> <br><br>
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
                            <a href='drop.php?&codigo=".$id_ado."'><span class='material-symbols-outlined'>
                            delete
                            </span></a>
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



echo "</div>
</main>
</body>
</html>";



?>