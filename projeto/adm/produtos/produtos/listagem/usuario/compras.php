<?php
    include_once("../../../../../conexaoBD.php");
    if(!isset($_SESSION))
    {
        session_start();
    }
    $id_u = $_SESSION['id_u']; 

    $sql_code = "SELECT * FROM armazena WHERE id_user = $id_u";
    $query = $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

    foreach($query as $exibe)
    {
        $id_user = $exibe['id_user'];
    }

    if (empty($id_user))
    {
        echo "
        <style>
        
        @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap');
        body{
            background-image: url(imgs/Aviso.gif);
            background-position:center;
            background-size:100% 100%;
        }
                .aviso{
                    margin-left:60%;
                    width:50%;
                    font-size:30px;
                    font-family:'League Spartan';
                    text-align: justify;
                    margin-top:20%;
                }
               .aviso h2{
                
                    color:#AF2A2A;
                }
        
                a{
                    font-family:  'League Spartan';
                    text-decoration:none;
                    font-weight:600;
                    color:green;
                  }
                 
                  a:hover{
                    color:#3a3a3b;
                  }
                
                </style>
                    <title>Lembrete!!</title>
                    
                    <div class='aviso'>
                    <h2>Aviso!!!</h2>O usuário não possui <br>pedidos ainda <br><br>
                    <a href= '../../../../usuario/listagem.php'>Voltar</a> <br><br></div>";
        echo "<title>Lembrete!!</title>
        ";
    }

    else 
    {
       
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='../../../../css/style.css'>
            <title>Compra registrada</title>
        </head>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap');
        body{
            background-image: url(../../../../../index/imgs/fundo-s.jpg);
            background-position:center;
            background-size:100% 100%;
        }
        main{
            display: flex;
             align-items: center;
             justify-content: center;
             padding: 20px;
             min-height: 900px;
             color:white ;
         }
    
         }
  
         .espaco{
             width: 30%;
             display: flex;
             align-items: center;
             padding: 20px;
             border-radius: 20px  0 0 20px;
         }
         
         .input-senha{
             width: 50%;
             float: left;
             padding-right: 15px;
         }
         .caixa{
             display: flex;
             width: 1000px;
         }
         
         .caixa-dados{
             background-color: rgba(255, 255, 255, 0.4);
             backdrop-filter: blur(40px);
             padding: 30px 40px;
             width: 80%;
             border-radius: 20px;
             
         }
         .caixa-dados h2{
             font-size: 20px;
         }
         .caixa-dados  a{
             font-family: 'Poppins';
             text-decoration:none;
             font-size: 0.9rem;
             font-weight:600;
             color:#fcfcfc;
           }
          
          .caixa-dados a:hover{
             color:#3a3a3b;
           }
         </style>
        <body>
        <header id='menu'>
        <nav>
     <img src='../../../../../petshop/imgs/logo.png' >
       <ul class='nav-list'>
            <li><a href='../../../../usuario/listagem.php'>VOLTAR</a> </li>
            <br>
         </ul>
  
         </nav>
  </header>
        
        
            ";
            
            echo "<div class='caixa'>
            <div class='espaco'></div>
              <div class='caixa-dados'>
            <tr>
            <th>  <h2>Pedidos realizados pelo usuário</h2></th></tr>
                    <tr>"; 
        foreach($query as $dade)
        {
            $id_pro = $dade['id_pro'];
            $cor = $dade['cor'];
            $tam = $dade['tamanho'];
            $qtd = $dade['qtd'];
            $valor = $dade['valor'];
            $data = $dade['data'];
    
    
                $sql= "SELECT * FROM produto where id_pro = $id_pro";     
                $instrucao= $conexao->query($sql) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));
        
        
                foreach($instrucao as $dados)
                {
                    $prod = $dados['prod'];
                    $preco = $dados['preco'];
                    $img_pro = $dados['img_pro'];

                  
        
                    echo "
               
                          
                                <img src=".$img_pro." width='100px' height='100px'>
                         
                                <div class='info'>
                                ".$prod." /
                          
                            
                       
                                ".$cor."/
                              
        
                        
                                ".$tam."/
                              
                         
                                R$".$preco."/
                               
        
                          
                                ".$qtd."/
                               
                       
                                R$".$valor."/
                            
        
                         
                                ".$data."
                                
                                </div>
        
        
                    ";  
        
                }
        }
    }



    echo "</div>

    </div>
    
   ";



?> 
 </main>
</body>
    </html>