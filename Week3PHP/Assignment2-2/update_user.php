<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $id = $_POST['id']; 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $zip = $_POST['zip'];
        $phone = $_POST['phone'];
        
        if(!is_numeric($phone)){
            $error_message = "Your phone number must be only in digits";
            include ('Errorpage.php');
        } else if ($phone.length > 7){
            $error_message = 'Your phone number must be at least 7 digits long';
        } else if ($zip.length < 5 && $zip.length >5){
            $error_message = 'Your ZIP Code must be 5 digits long';
        } else if(is_numeric($name)){
            $error_message = 'Your name must not contain numbers';
        } else
        {
            include $db;
            
            $updatequery = "UPDATE users set name = '$name', email = '$email', "
                    . "zip = '$zip', $phone = 'phone' where id = '$id';";
            $db->execute($updatequery);
            
            
            
        }
            
        
        
        ?>
    </body>
</html>
