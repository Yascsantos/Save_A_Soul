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
    .encontro{
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
    width: 600px;
     margin-top: 200px;
  
    font-family: "Poppins", sans-serif;
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


?></div>
</main>
</body>
</html>