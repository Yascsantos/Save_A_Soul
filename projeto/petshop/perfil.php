<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Save a soul|Compra</title>
</head>
<body>

    <header>
        <a href="../index.php" class="logo"><img src='../index/imgs/logo.png'>Save a soul</a>

        <ul class="navegação">
            <li><a href='../adm/produtos/produtos/listagem/pet/grade_nova.php'>Voltar</a></li>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../index/ajude.php#sobre">Doar</a></li>
            <li><a href="../index.php#contato">Contate nos</a></li>
        </ul><!--navegação-->


    </header>

    <section class="home">
        <div class="home-img">
        <?php
      include_once("protect.php");
?>

<?php
    include_once("../conexaoBD.php");
    include("protect.php");


    if(!isset($_SESSION))
    {
        session_start();
    }
    $_SESSION['id_p'] = $_GET['codigo']; //id_pro
    $id = $_SESSION['id_p'];


    if($_GET['codigo'] == "" && $_GET['codigo'] == 0)
    {

    }    

    //IMAGENS 
    $sql= "SELECT * FROM imgpro WHERE id_pro = $id";
    $instrucao = mysqli_query($conexao,$sql);

    foreach ($instrucao as $exibe) 
    {
        echo "
         
            <img src=".$exibe['img']." class='one'>
        
            </div>
            ";
        }
    
 
     
 //PRODUTOS
 $sql_code= "SELECT * FROM produto WHERE id_pro = $id";
 $pesquisa = mysqli_query($conexao,$sql_code);
 

 foreach ($pesquisa as $exibe) 
 {
    echo" <div class='home-text'>";
     echo "

            <h1> <br>" .$exibe['prod']."<br> ".$exibe['modelo']."</h1>
            <h5>".$exibe['outros']."</h5>
            <h3>R$".$exibe['preco']."</h3>
     
      
            ";
        }
      echo"   <form action='./carrinho/carrinho.php' method='POST'>";
    
            //tamanho
            $sql= "SELECT * FROM tamanhos WHERE id_pro = $id";
            $instrucao = mysqli_query($conexao,$sql);
        
           echo"<div class='tam'> <label for=''>Tamanhos:</label>
           <select name='tamanho' required>
           ";
            foreach ($instrucao as $exibe) 
            {
                echo "    
            
                    <option for='".$exibe['tamanho']."' value='".$exibe['tamanho']."'required> ".$exibe['tamanho']."</option>  
                   
             
                ";
           
            }
         echo" </select>"
 ;       
            //cores
                $code= "SELECT * FROM cores WHERE id_pro = $id";
                $busca = mysqli_query($conexao,$code);
                
                echo "<label>Cores:</label>
                <select name='cor' required>";
                foreach ($busca as $exibe) 
                {
                    echo "  <option for='".$exibe['cor']."' name='cor' value=".$exibe['cor'].">
                    ".$exibe['cor']."</option>  
                    ";
            
                }
                echo" </select></div>";
        
            echo "
        
                <input type='number' placeholder='Qtd' name='qtd'><br><br>
               
         <input type='submit' name='salvar' value= 'Adicionar ao carrinho' class='comprar'>
            ";
          
            echo "</form>";
        
        
        
        ?>
        </div>
    </section>


  



     
  
    <script>
        function slider (anything){
            document.querySelector ('.one') .src = anything;
        };

       let menu = document.querySelector ('#menu-icon');
       let navbar = document.querySelector ('.navbar');

       menu.onclick = () => {
        menu.classList.toggle ('bx-x');
        navbar.classList.toggle ('open');
       }
    </script>
    
</body>
</html>