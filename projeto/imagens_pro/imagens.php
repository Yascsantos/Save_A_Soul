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
    border-bottom:2px solid black;
  }
    .encontro{
      background:pink;
      
    font-family: 'Poppins', sans-serif;
    width:60%
    ;
    text-align: justify;
    }

#endereco {
    display:flex;


}
</style><body>

<div class='encontro' >
<h2>listagem de imagens</h2>
    
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
        <div id='encontro'>
            <td align='center'><img src=".$exibe['img']."  width='100px' height='100px'></td>
            <td></td>
        </div>
        ";
    }
    echo"<br></table>";


?>
  <a href='../adm/produtos/produtos/listagem/geral/pro.php'>Voltar</a>
</div>
</body>
</html>
