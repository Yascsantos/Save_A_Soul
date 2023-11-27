<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>+ Imagens</title>
</head>
<Style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
    
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


</body>
</html>