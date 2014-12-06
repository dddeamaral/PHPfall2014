<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="#" name="mainform" method="post">
            Passcode:<input type="password" name="passcode" value=""/>
            <input type="submit" value="Submit"/>
            
        </form>
        
        <?php
        
        session_start();
        
        //$_SESSION['loggedin'] = true;
        
        if(!empty($_POST)){
        $passcode = $_POST['passcode'];
        
        if($passcode == "test"){
            $_SESSION['loggedin'] = true;
            header('Location: admin.php');
        } else{
            $_SESSION['loggedin'] = false;
        }
        
       }
        
        var_dump($_SESSION);
        
        ?>
    </body>
</html>
