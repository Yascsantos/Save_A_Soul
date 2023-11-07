<?php
    include_once("../../../../../conexaoBD.php");
    if(!isset($_SESSION))
    {
        session_start();
    }

    $sql_code = "SELECT * FROM armazena";
    $query = $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

       
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        
            <title>Compra registrada</title>
        </head>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap'); 
     .carrinho {
              font-family: 'League Spartan', sans-serif;
              text-align: center;
         
            background-color: #fff;
            box-shadow:2px 3px 10px 5px rgba(0, 0, 0, 0.2);
          
          }
  
  
  
        
          .car {
           
              padding: 20px;
              font-family: 'League Spartan';
              margin-top: 20px;
             
          }
  
          a{
      text-decoration:none;
      color: #758354b0;
     }
          .car .detalhes .item a{
            color: #777;
          
            
          }
          .car .detalhes .item a:hover{
            color: #333;
          
          
          
          }
  
  
       
          .car .detalhes  {
              margin: 10px 5PX;
              display: flex;
              border-bottom: 1px solid #555c4ce0;
             
          }
  
          .car .detalhes .item P {
              display: inline-block;
              margin-left:15PX ;
              color: #333;
          }
       
          .car .detalhes .item h2 {
              font-size: 16px;
              margin: 0;
          }
  
          .car .detalhes .item .valor {
              text-align: right;
              margin-top: 100%;
          }
  
        
        
      
      .comprar{
    align-items: center;
    width: 50%;
    height:50px;
    background: #080808;
    margin-right: 20%;
    color: white;
    font-size: 20px;
  }
     </style>
        <body>
  
      
           
        
        
            ";
            
            echo "<section class='carrinho'>
      
           
            
            <a href='../../../../index.html'><-VOLTAR</a> 

                <div class='carrinho-content'> <h2>Pedidos realizados pelo usuário</h2>"; 
                
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

                  
        
                
                    echo "<div class='car'>
                    <div class='detalhes'>
                       
                    <div class='Descrição'>
                          
                              
                              
                                <div class='Descrição'>
                                <img src=".$img_pro." width='100px' height='100px'><br>
                                <b>  ".$prod." </b>".$cor." Tam:".$tam."  </div>
                                               
                                <div class='item'>
                                <p >Quantidade:
                                    ".$qtd."</p>
                                </div><BR>
                               
                                <p>Data da compra ".$data."</p>
                                </div><BR>
                                <div class='item'>
                <p>Preço unitário:R$".$preco." </p><br>
                                    </div>
                                    <div class='item'>
                                        <p class='valor'>Total:R$".$valor."</p>
                                       
                                    </div>
                                </div>
                            
                                
                              
        
        
                    ";  
        
                }
        }




    echo "</div>

   
    
   ";



?> 
 </main>
</body>
    </html>