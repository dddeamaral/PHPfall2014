<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $fullName = $_POST['Name'];
        $phoneNum = $_POST['Phone'];
        $email = $_POST['Email'];
        $zipCode = $_POST['ZIP'];
        
        if(empty($fullName)){
            $errorMsg = 'You need to type something in for the Name field.';
        }else if(is_numeric($fullName)){
            $errorMsg = 'You cannot have numbers in your name!';
        }else if(!is_numeric($phoneNum)){
           $errorMsg = 'Please type in only numeric values for Phone Number.';
        } else if (empty ($phoneNum)){
            $errorMsg = 'Please type in something for the Phone Number';
        } else if(is_numeric($Email)){
           $errorMsg = 'Please type in only characters for Email.';
        } else if (empty ($Email)){
            $errorMsg = 'Please type in something for the Email Field';
        } else if(!is_numeric($zipCode)){
           $errorMsg = 'Please type in only numeric values for Zip Code.';
        } else if (empty ($zipCode)){
            $errorMsg = 'Please type in something for the Zip Code.';
        } else{
            $errorMsg = '';
        }
            
        
        
        if ($error_message != '') {
        include('assignment2-1.php');
        exit();
    }
            
        ?>
    </body>
</html>
