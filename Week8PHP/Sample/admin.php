<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>Admin Page</h1>
       
        <a href="?logout=true">Logout</a>
        
            <?php
            
            session_start();
            
           if ($_SESSION['loggedin'] == false){
               header('Location: login.php');
           }
            
            if(!empty($_GET)){
            $logout = $_GET['logout'];
            
            if($logout == "true"){
                $_SESSION['loggedin'] = false;
                header('Location: login.php');
            }
        }
        ?>
    </body>
</html>
