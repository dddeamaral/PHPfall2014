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
        $error_message = '';
        if(empty($fullName)){
            $error_message = 'You need to type something in for the Name field.';
        }else if(is_numeric($fullName)){
            $error_message = 'You cannot have numbers in your name!';
        }else if(!is_numeric($phoneNum)){
           $error_message = 'Please type in only numeric values for Phone Number.';
        } else if (empty ($phoneNum)){
            $error_message = 'Please type in something for the Phone Number';
        } else if(is_numeric($email)){
           $error_message = 'Please type in only characters for Email.';
        } else if (empty ($email)){
            $error_message = 'Please type in something for the Email Field';
        } else if(!is_numeric($zipCode)){
           $error_message = 'Please type in only numeric values for Zip Code.';
        } else if (empty ($zipCode)){
            $error_message = 'Please type in something for the Zip Code.';
        } else{
            $error_message = '';
        }
            
        
        
        if ($error_message != '') {
        include('assignment2-1.php');
        exit();
    } else {
        
    }
            
        ?>
        
          <div id="content">
        <h1>This is your Information!!!</h1>

        <label>Name:</label>
        <span><?php echo $fullName; ?></span><br />

        <label>Phone:</label>
        <span><?php echo $phoneNum; ?></span><br />

        <label>Email:</label>
        <span><?php echo $email; ?></span><br />

        <label>Zip Code:</label>
        <span><?php echo $zipCode; ?></span><br />

        <p>&nbsp;</p>
    </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>
