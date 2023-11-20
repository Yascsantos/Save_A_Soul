

<?php
    include_once("../../../../../conexaoBD.php");
    $tabela= "cores";
    $campo= "id_pro, cor"; 

    if(!isset($_SESSION))
    {
        session_start();
    }
    $id = $_SESSION['id_pro'];


    if(isset($_POST['cadastrar']))
    {
      $cor = $_POST['cor'];
    }

    $sql = "INSERT INTO cores (id_pro, cor) VALUES ($id,'$cor')";
    $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
      
    if (!$instrucao) 
    {
      die(' Query Inválida: ' . mysqli_error($conexao));

    } 
    else 
    {
      mysqli_close($conexao);
      header ('location: ../tam/form.php');
      exit;
    }
  ?>