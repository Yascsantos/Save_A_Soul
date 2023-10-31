<?php
include_once("../../conexaoBD.php");
include_once("protect.php");

if(!isset($_SESSION))
{
    session_start();
}
$user = $_SESSION['id_user'];
$id = $_SESSION['id_ani'];

if(isset($_POST['enviar']))    
{
    $data = $_POST['data'];
    $hora = $_POST['horas'];

    $tabela="adocao";
    $campo= "id_user, id_ani, data_entre, horario, status"; 

    $sql = "INSERT INTO $tabela ($campo) 
    VALUES ('$user','$id','$data', '$hora', '---')";

    $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

    if (!$instrucao) 
    {
        die(' Query Inválida: ' . mysqli_error($conexao));
    }
    
    
    else 
    {
        $code = "UPDATE animal SET 
        status = 'analise',
        modalidade = '---' 
        WHERE id_ani = $id";
        $codigo= $conexao->query($code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

        if (!$codigo) 
        {
            die(' Query Inválida: ' . mysqli_error($conexao));
        }

        else 
        {
            $sql_code = "SELECT * FROM adocao where id_ani = $id and id_user = $user";
            $code = mysqli_query($conexao,$sql_code);
            foreach ($code as $dade) 
            {
                $id_adocao = $dade['id_ado'];
                $_SESSION['id_adocao'] = $id_adocao;
                header ('location:compro.php');
            }

        }

    }

}



?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Adotar</title>
</head>
<style>
    
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&family=Ubuntu:wght@400;500;700&display=swap');
    body{
      
        font-family:'Roboto';}
   
    .sobre-produto{
        box-shadow:2px 3px 10px 5px rgba(0, 0, 0, 0.2);
      border-top:1px solid black;
       display:flex;
       padding: 30px 40px;
      
   }
   
   .img img{
    padding: 10px 50px 50px 50px;
      width:300px;
      heigth:300px;
      
   }
   .info-prod {
    border-left:1px solid black;

       margin-top: auto;
       padding:30px;
       text-aling:center;
       font-family:'Roboto';
       color: #4c5838;

   }
   .tam {
  display:flex;
  
}
label{
    color: #4c5838;
    font-weight: bold;
    display: block;
}
.comprar{
    align-items: center;
    height:50px;
    background: #080808;
    color: white;
    font-size: 20px;
  }

  .num{
    width:20%;

  }
 input {
    background-color: rgba(255, 255, 255, 0.32);
    border-radius: 20px;
    outline: none;
    border: 2px solid transparent;
    padding: 10px;
    font-size: 15px;
    color: #616161;
    transition: all 0.4s ease;
}
form  input:focus{
    border-color: #adb5a0;
}
a{
    color: hsl(257, 11%, 88%);
    text-decoration: none;
}
    </style>


<body> 


<div class='sobre-produto'>

<?php
  

    if(!isset($_SESSION))
    {
        session_start();
   
    $_SESSION['id_ani'] = $_GET['codigo']; //id_ani
    $id = $_SESSION['id_ani'];

   }
    //ANIMAIS
    $sql= "SELECT * FROM animal where id_ani = $id";
    $instrucao = mysqli_query($conexao,$sql);
    foreach ($instrucao as $exibe) 
    {
    
        $nome = $exibe['nome_ani'];
        $raca = $exibe['raca'];
        $porte = $exibe['porte'];
        $sexo = $exibe['sexo'];
        echo "
        <div class='img'>
    imagem aqui
        
        </div>
        "; 
        
        echo "  <div class='info-prod'>
         Esse(a) é o(a) $nome. <br> Ele(a) é um(a) $raca, de porte $porte e um(a) $sexo.";
        echo "<br><br>";
        
        echo "Deseja adota-lo? ";
        echo "<a onclick='openPopup()'>Sim</a>
        <div id='popupContainer' style='display: none;'>
        <div class='Popup'> 
         <span class='material-symbols-outlined' onclick='closePopup()'>
        close
        </span>

<p>Antes de adota-lo você precisa conhece-lo. <br>
    Preencha o formulário a baixo para marcarmos seu encontro.
</p>


<h3>Escolha data e horário</h3>


<form method='post' action=''>
    <input type='date' name='data'/>
    <input type='time' name='horas'/><br>
     <button input type='submit' name='enviar' value='Enviar' />Agendar</button>
</form>
     </div>
    </div>
    <script>
        function openPopup() {
            document.getElementById('popupContainer').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('popupContainer').style.display = 'none';
        }
    </script>";
        echo "<a href='../../adm/animais/listagem/grade.php'> Não</a>";

    }
?>          
</div></div>
</body>
</html>      


