<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=c">
    <title>Alteração de pedido</title>
</head>
<body>
</body>
</html>

<?php
         include_once("../../conexaoBD.php");
         $tabela="carrinho";
         $id = "id_car"; 
         $pesq= "cor, tamanho, qtd, valor";

         if(!isset($_SESSION))
         {
             session_start();
         }
         $car = $_SESSION['car'];
         $pro = $_SESSION['pro'];

        //Valor 
            $code = "SELECT preco FROM produto WHERE id_pro = $pro";
            $cod= $conexao->query($code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
            foreach($cod as $exibe)
            {
                $preco = $exibe['preco'];
            }
         

         $sql_code = "SELECT $pesq FROM $tabela WHERE $id = $car";
         $sql_query= $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
     
         
         if (!$sql_query)
         {
             die(' Query Inválida: ' . mysqli_error($conexao));
             
         } 
     
         //caso não ocorra uma alteração de dados
             $sqlPesq = "SELECT * FROM $tabela WHERE $id = $car";
             $pesquisa= $conexao->query($sqlPesq) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
          
             if (!$pesquisa) 
             {
                 die(' Query Inválida: ' . mysqli_error($conexao));
             } 
     
         //Transformando o array em variáveis de apoio
             foreach ($pesquisa as $dados)
             {
                 $cor = $dados ['cor'];
                 $tam  = $dados['tamanho'];
                 $qtd = $dados['qtd'];

                 echo $qtd;
      
             }
     
         //variáveis do form
             if (isset($_POST['salvar'])) 
             {
                     $tamanho = $_POST['tamanho'];
                     $col = $_POST['cor'];
                     $num = $_POST['qtd'];
         
                 //verificação de campos nulos
                     if(empty($tamanho)) {$tamanho = $tam;}
                     if(empty($col)) {$col = $cor;}
                     if(empty($num)) {$num = $qtd;}

                     echo $num;
                     echo $preco;


                
                //valor
                    $valor = $num * $preco;  
                    echo $valor; 

                //Script para atualizar um registro na tabela no Banco de Dados
                     $sql = "UPDATE $tabela SET 
                     cor = '$col',
                     tamanho = '$tamanho', 
                     qtd = '$num',
                     valor = '$valor'
                     WHERE $id = $car";
                     
     
                     $instrucao = mysqli_query($conexao,$sql);
                     if ($instrucao) 
                     {
        
                        mysqli_close($conexao);
                         header ('Location:../../adm/produtos/produtos/listagem/pet/exibe_car.php');
                         exit;
     
                     } 
                     else 
                     {
                         die(' Query Inválida: ' . mysqli_error($conexao));
                     }
             }
     
     
?>
     
