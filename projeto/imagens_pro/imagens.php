<?php
    //id
    if(!isset($_SESSION))
    {
        session_start();
    }
    $_SESSION['id_ip'] = $_GET['codigo']; //id_pro
    $cod = $_SESSION['id_ip'];

    include_once("../conexaoBD.php");
    $pesq= "SELECT prod FROM produto WHERE id_pro = $cod";
    $pesquisa = mysqli_query($conexao,$pesq);
    foreach($pesquisa as $das)
    {
        $prod = $das['prod'];
    }

    echo "
    <!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>".$prod."</title>
    </head>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

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
#endereco {
    display: none;
    width: 100%;
    height: 200px;
    border: none;
    margin-top: 10px;
}
</style><body>

<div class='encontro' >
        <h3><a href='../adm/produtos/produtos/listagem/geral/pro.php'>Voltar</a></h3><br>
    ";
    $sql= "SELECT * FROM imgpro WHERE id_pro = $cod";
    $instrucao = mysqli_query($conexao,$sql);
    echo "
    <table> 
        <tr>
            <th align='center'></th>
            <th></th>

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
    echo"<br></table>";


?>
</div>
</body>
</html>
