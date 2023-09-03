<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mudar status</title>
</head>
<body>
    <h1>Cadastar status</h1>
    <form method="POST" action="form.php">
    <select name="status">
        <option value="">Selecione o status</option>
        <option value="sim">Aprovada</option>
        <option value="nao">Reprovada</option>
    </select>
    <input type="submit" name="cadastrar" value="Cadastrar">
    </form>
</body>
</html>
<?php
    include_once("../../../conexaoBD.php");
    //id_user
    if(!isset($_SESSION))
    {
        session_start();
    }
    $cod = $_SESSION['id_u'];
        
    

    if(isset($_POST['cadastrar']))
    {
        $status = $_POST['status'];
        
        if ($status == "sim")
        {
            $sql = "UPDATE adocao SET 
			status = '$status' 
			WHERE id_user = $cod";
			$instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));		
			if ($instrucao) 
			{
				echo 'Funcionou';
			} 
        }

        else 
        {
            echo "Nop Cadastro";
        }
    }
?>