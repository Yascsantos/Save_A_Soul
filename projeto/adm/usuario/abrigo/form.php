<?php
        include_once("../../../conexaoBD.php");
        //id_user
        if(!isset($_SESSION))
        {
            session_start();
        }
        $cod = $_SESSION['id_u'];
        $_SESSION['codigo'] = $_GET['codigo'];
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mudar status</title>
</head>
<body>
    <h1>Cadastar status</h1>
    <form method="POST" action="">
        <input type="radio" name="status" value="Aprovado"/>
            <label  for="status" class="radio">Aprovado</label>
        <br>
        <input type="radio" name="status" value="Reprovado"/>
            <label  for="status" class="radio">Reprovado</label>
        <br><br>
    <input type="submit" name="cadastrar" value="Cadastrar">
    </form>
</body>
</html>
<?php
    if(isset($_POST['cadastrar']))
    {
        $id = $_SESSION['codigo'];
        $status = $_POST['status'];

        $sql = "UPDATE voluntario SET 
			    status = '$status' 
			    WHERE id_vol = $id";
		$instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));		
		if ($instrucao) 
		{
            mysqli_close($conexao);
            header ('location: final.php');
            exit;
        
		} 
    }


?>