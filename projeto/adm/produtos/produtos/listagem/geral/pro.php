<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade de produtos</title>
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
.prod{
    padding: 10px;
    display: flex;
}
    
a {
    
      font-size: 0.9rem;
      text-decoration:none;
      font-size: 0.9rem;
      font-weight:600;
      color: black;
      
    }
   
    a:hover{
      color:#3a3a3b;
    }
    .encontro{
       
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
    width: 400px;

    font-family: 'Poppins', sans-serif;
    padding: 30px 40px;
    text-align: justify;
    }
.img{
   
    border-bottom: 1px solid black;
}

body{
        font-family: 'Poppins';
        background-size:cover;
        background-image:url(../../../../index/imgs/fundo.jpg);

       
    }

</style>
<body>
    <main>
    <div class='encontro' > 

    <h3>Listagem dos produtos cadastrados</h3>
    <a href="../../pg02.html">Voltar</a>

<?php
     include_once("../../../../../conexaoBD.php");
     $sql_code= "SELECT * FROM produto";
     $pesquisa = mysqli_query($conexao,$sql_code);
                
                
    
  
                
     foreach ($pesquisa as $exibe) 
     { echo "<div class='img'>";
         echo "
            
        
           
                  <a href='list.php?&codigo=".$exibe['id_pro']."'><img src=".$exibe['img_pro']." alt='Imagem padrão' width='100px' height='100px'></a><br>
      <a href='list.php?&codigo=".$exibe['id_pro']."'>".$exibe['prod']."</a>
      </div>
             ";
                
     }
    

?>
</div>
</body>
</html>