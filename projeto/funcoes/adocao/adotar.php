<?php
include_once("../../conexaoBD.php");

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
    <link rel="stylesheet" href="../../index/css/index.css">
    <link rel="stylesheet" href="../../adm/css/style.css">
    <link rel="stylesheet" href="../../petshop/css/petshop.css">
    <title>Adotar</title>
</head>
<style> 
.Popup {
     background-color:#pink;
     color:black;
     top: 50%;
 margin-left:30%;
   
    transform: translate(-50%, -50%);
    text-align: center;
  }
</style>

<body> 

    <main>
<div class="caixa-dados">
        <p>
    
    Muitas pessoas querem um animalzinho em casa para fazer companhia porém não tem condições de comprar um.<br>
    Em contrapartida, muitos animais querem e precisam de um lar.
</p>
    <br>
<p> 
    Porque não resolver esses dois problemas de uma vez só??
    Por isso a ONG desenvolveu um sistema de adoção para que todos possam ter um bichinho em suas casas sem 
    precisar pagar para isso.
</p>


   


<?php
  

    if(!isset($_SESSION))
    {
        session_start();
    }
    $_SESSION['id_ani'] = $_GET['codigo']; //id_ani
    $id = $_SESSION['id_ani'];
       
    //ANIMAIS
    $sql= "SELECT * FROM animal where id_ani = $id";
    $instrucao = mysqli_query($conexao,$sql);
    foreach ($instrucao as $exibe) 
    {
        $nome = $exibe['nome_ani'];
        $raca = $exibe['raca'];
        $porte = $exibe['porte'];
        $sexo = $exibe['sexo'];

        echo "Esse(a) é o(a) $nome. <br> Ele(a) é um(a) $raca, de porte $porte e um(a) $sexo.";
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

<h2>Escolha data e horário</h2>


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
</div>
</main>
</body>
</html>      


