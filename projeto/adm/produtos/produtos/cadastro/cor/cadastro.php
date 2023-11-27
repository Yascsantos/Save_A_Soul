

<?php
    include_once("../../../../../conexaoBD.php");
    if(!isset($_SESSION))
    {
        session_start();
    }
    $id = $_SESSION['code'];
    echo $id;


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
      header ('location: ../infos/pro.php');
      exit;
    }
  ?>