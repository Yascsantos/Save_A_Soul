<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    if(!isset($_SESSION['id_user']))
    {
        //header("Location:../login/login.php");
        die
        (" 
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,200;1,300&family=Righteous&display=swap');
        body{
            background-image:url('updates/imgs/fundo1.jpg');
        }

        .protect{
            background-color:red;
            margin-top:20%;
            margin-left:33%;
            width:500px;
            text-align:center;
            font-family: 'Poppins';
       
            border-radius:5px;
            background-color: white;
            backdrop-filter: blur(40px);
        }
        button{
            
            width: 20%;
            height: 30px;
            text-align: center;
            background:   #adb5a0;
            border-radius: 20px;
            outline: none;
            border: none;
            margin-top: 30px;
            color: white;
        
        }
        a{
            color:white;
            font-family: 'Poppins'; 
        text-decoration:none;
        }

        </style>
        
        <div class='protect'><br><h2 ><b>Logue para acessar seu perfil</b></h2> 
             CLIQUE AQUI PARA <b>----></b><button type='button'><a href='../login/login.php'>LOGAR </a></button><BR>OU VOLTE AO 
             <B>----></B><button type='button'><a href='../../../projeto/index/index.php'>INICIO </a></button>
             <BR><BR>  </form><BR></div>
        ");
    }
    
?>
