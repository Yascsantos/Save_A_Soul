<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Listagem dos animais</title>
    <Style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
        body{
        font-family: 'Poppins';
        background-size:1500px 900px;
        background-image:url(../../../index/imgs/fundo1.jpg);

       
    }
       

    </style>
</head>
<body>

<?php
    include_once("../../../conexaoBD.php");
    $sql= "SELECT * FROM animal";     
    $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));


    echo "
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
    main{
  
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  min-height: 10vh;

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
<main>
<div class='encontro' >
<br>Clique na imagem para cadastrar a imagem padrão do animal </p>
<a href='../cadastro/form.html'>->CADASTRAR MAIS ANIMAIS</a><br>
       <a href='../pg05.html '> <-VOLTAR</a>
    <table> 
        <tr>
            <th align='center'></th>
            <th></th>
            <th></th>
            <th></th>

            <th align='center'>Imagem padrão</th>
            <th> </th>
            <th align='center'>Código</th>
            <th> </th>
            <th align='center'>Nome</th>
            <th></th>
            <th align='center'>Raça</th>
            <th></th>
            <th align='center'>Porte</th>
            <th></th>
            <th align='center'>Sexo</th>
            <th></th>
            <th></th>

            <th></th>
            <th></th>
            <th></th>
            <th></th>


        </tr>";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <tr>
            <td align='center'><a href='../../../imagens_ani/pg07.php?&id=".$exibe['id_ani']."'> + Imagem(s)</a></td> 
            <td></td>            
            <td></td>
            <td></td>

            <td align='center'><a href='../cadastro/pg06.php?&codigo=".$exibe['id_ani']."'><img src=".$exibe['img_ani']." alt='Imagem padrão' width='100px' height='100px'></a></td>
            <td></td>
            <td align='center'>".$exibe['id_ani']."</td>
            <td></td>
            <td align='center'>".$exibe['nome_ani']."</td>
            <td></td>
            <td align='center'>".$exibe['raca']."</td>
            <td></td>
            <td align='center'>".$exibe['porte']."</td>
            <td></td>
            <td align='center'>".$exibe['sexo']."</td>
            <td></td>
            <td></td>

            <td align='center'><a href='../delete/delete.php?&codigo=".$exibe['id_ani']."'>Apagar registo</a></td> 
            <td></td>
            <td></td>
            <td align='center'><a href='../update/alter.php?&codigo=".$exibe['id_ani']."'>Alterar registro </a></td>

        </tr>
        ";
    }


    echo "</div>
    </main>
    </body>
    </html>";

?>

</body>
</html>
