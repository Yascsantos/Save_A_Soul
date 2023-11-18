<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap');

        body{
            background-image: url('../../../../../petshop/imgs/fundo.gif');
            background-size:cover;
        }
        .carrinho {
            font-family: 'League Spartan', sans-serif;
            text-align: center;
        }

        .title {
            font-size: 24px;
            color: #333;
           
        }

        .max-width {
            max-width: 600px;
            margin: 0 auto;
        }

      
        .recibo {
            border: 1px solid #000;
            padding: 20px;
            font-family: 'League Spartan';
            margin-top: 20px;
           
        }

    
        .recibo .cabecalho {
            text-align: center;
        }

        .recibo .cabecalho h1 {
            font-size: 24px;
            margin: 0;
            color: #333;
        }

        .recibo .cabecalho p {
            font-size: 14px;
            color: #777;
        }

     
        .recibo .detalhes  {
            margin: 5px 0;
            display: flex;
           
        }

        .recibo .detalhes .item span {
            display: inline-block;
            width: 50%;
            color: #333;
        }

        .recibo .detalhes .item h2 {
            font-size: 16px;
            margin: 0;
        }

        .recibo .detalhes .item .valor {
            text-align: right;
            margin-top: 100%;
        }

      
      
    

      
        .comprar {
            background-color: #6F7959;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            margin-left: 10%;
        }

        .comprar:hover {
            background-color: #BCCFA8;
        }
        .material-symbols-outlined{
        margin-top: 20px;
        margin-right: 25px;
        position: absolute;
        color:black;
    }
    </style>
    <title>Compra registrada</title>
</head>
<body>
    <section class='carrinho'>
        <b> <h2 class='title'>Seu pedido foi registrado :)</h2></b>
        <div class='max-width'>
            <div class='carrinho-content'>
                <?php
                include_once("../../../../../conexaoBD.php");

                if(!isset($_SESSION))
                {
                    session_start();
                }
                $id_user = $_SESSION['id_user'];
                $numero = $_SESSION['id_car'];

                $sql_code = "SELECT * FROM pedido WHERE numero = $numero";
                $code = $conexao->query($sql_code) or die("Falha na execução do código SQL: ". mysqli_error($conexao));

              
                echo "<div class='recibo'>
                    <div class='cabecalho'>
                        <h1>Recibo</h1>
                        </div>
                  ";

                foreach($code as $dade)
                {
                    $id_pro = $dade['id_pro'];
                    $cor = $dade['cor'];
                    $tam = $dade['tamanho'];
                    $qtd = $dade['qtd'];
                    $valor = $dade['valor'];

                    $sql= "SELECT * FROM produto where id_pro = $id_pro";
                    $instrucao= $conexao->query($sql) or die("Falha na execução do código SQL: ". mysqli_error($conexao));

                    foreach($instrucao as $dados)
                    {
                        $prod = $dados['prod'];
                        $preco = $dados['preco'];
                        $img_pro = $dados['img_pro'];

                        echo "
                        <div class='detalhes'>
                       
                            <div class='Descrição'>
                            <img src=".$img_pro." width='100px' height='100px'><br>
                          <b>  ".$prod." </b>".$cor." Tam:".$tam."  </div>
                           
                            <div class='item'>
                            <p >Quantidade:
                                ".$qtd."</p>
                            </div>
                            <div class='item'>
                                <p>Preço unitário:R$".$preco." </p>
                             
                            </div>
                            <div class='item'>
                                <p class='valor'>Total:R$".$valor."</p>
                               
                            </div>
                        </div>
                    
                     ";
                    }
                   
                }
                include_once ("../pet/proc.php");
                echo "<p> Muito obrigada pela confiança. </p>
                <p>OBS: Caso você volte para o carrinho, sua compra será interrompida.<br>
                <a href= './entrega/back.php'><span class='material-symbols-outlined'>
                shopping_cart
                </span></a>
                <a href= './entrega/armazena.php'><button  class='comprar'>Finalizar compra</button></a>
                ";
                ?>   </div>
            </div>
        </div>
    </section>
</body>
</html>