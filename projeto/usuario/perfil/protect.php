<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    if(!isset($_SESSION['id_user']))
    {
        die
        (" 
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
       

        
            main{
  
                display: flex;
                align-items: center;
                justify-content: center;
               
              
              }
              .protect{
                      box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
                  width: 600px;
                   margin-top: 200px;
                
                  font-family: 'Poppins', sans-serif;
                  background-color: rgba(255, 255, 255, 0.993);
                  padding: 30px 40px;
                  text-align: justify;
                  }
        a {
    
            font-size: 0.9rem;
            text-decoration:none;
            font-size: 0.9rem;
            font-weight:600;
            color: black;
            
          }
         

        </style>
        <main>
        <div class='protect'><br><h2 ><b>Logue para acessar seu perfil</b></h2> 
             CLIQUE AQUI PARA <b>-><a href='../login/login.php'>LOGAR<BR>  </a>OU VOLTE AO 
             <B>-><a href='../../index.php'>INICIO </a>
             <BR><BR>  </form><BR></div>
             </main>
        ");
    }
    
?>
