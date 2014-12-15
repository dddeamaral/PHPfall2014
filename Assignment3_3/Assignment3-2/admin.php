<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <a href="?logout=true">Logout</a>
        
        <?php
        include 'header.php';
       
        if($_SESSION['loggedin']!= true){
            header('Location: login.php');
        }
       
        if(!empty($_GET)){
            $logout = $_GET['logout'];
            
            if($logout == "true"){
                $_SESSION['loggedin'] = false;
                header('Location: youloggedout.php');
            }
        }

        ?>
        <h1>!!You logged in!!</h1>
        <?php 
        
        ?>
        
    </body>
</html>
