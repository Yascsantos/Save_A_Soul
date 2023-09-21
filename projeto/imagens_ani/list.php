<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../adm/css/style.css">
    <title>+ Imagens</title>
</head>
<Style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
        body{
        background-image: url('../index/imgs/fundo-s.jpg');
        background-size: 100% 100%;
        background-position: center;
       }
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');


       table {
      width:50%;
       
        }
        .popup label {
             display: block;
             margin-bottom: 10px;
         }
 
     
             .popup {
                height:200px;
               width: 300px;
               padding: 20px;
               background-color: #fff;
               border: 1px solid #ccc;
               position: absolute;
               top: 50%;
               left: 50%;
               transform: translate(-50%, -50%);
               text-align: center;
             }
         
           .popup  iframe {
             border: none;
             width:100%;
             }
             .popup .material-symbols-outlined{
               margin-left:90%;
               color:rgb(156, 0, 0);
             }
             
      
    </style>
<body>
<main>
        


<main>
<div class="caixa">

              <div class="caixa-dados">
    <h3> Listagem das imagens dos animais </h3>
    <a onclick='openCad()' > Cadastrar imagens </a><br>
    <div id='popupContainer' style='display: none;'>
                <div  class='popup' >
                 <span class='material-symbols-outlined' onclick='closeCad()'>
                close
                </span> 
                <br><br>
              
              <iframe src='cad.php'></iframe>
             
                </div>
            </div>
        
            <script>
                function openCad() {
                    document.getElementById('popupContainer').style.display = 'block';
                }
        
                function closeCad() {
                    document.getElementById('popupContainer').style.display = 'none';
                }
            </script>
    <a href='../adm/animais/listagem/animais.php'>Voltar</a><br>
    <br> <br>

<?php
    //id
    if(!isset($_SESSION))
    {
        session_start();
    }
    $cod = $_SESSION['id_imgani'];

    include_once("../conexaoBD.php");
    $sql= "SELECT * FROM imgani WHERE id_ani = $cod";
    $instrucao = mysqli_query($conexao,$sql);

    echo "<h3>Imagens</h3>";
    echo "
    <table> 
        <tr>
            <th></th>
            <th></th>
            <th> </th>
            <th align='center'>Código do animal</th>
            <th> </th>
            <th align='center'>Imagem</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>

        </tr>";

    foreach ($instrucao as $exibe) 
    {
        echo "
        <tr>
            <td align='center'><a href='alter.php?&codigo=".$exibe['id_imgani']."'>Alterar </a></td>
            <td></td>
            <td></td>
            <td align='center'>".$exibe['id_ani']."</td>
            <td></td>
            <td align='center'><img src=".$exibe['img']."  width='100px' height='100px'></td>
            <td></td>
            <td></td>
            <td align='center'><a href='delete.php?&codigo=".$exibe['id_imgani']."'>Delete</a></td> 
            <td></td>
        </tr>
        ";
    }
    echo"</table>";


?>

</div>
</div>
</div>
</main>
</body>
</html>