<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
       
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $zip = $_POST['zip'];
        $error_message = '';
        
        if(empty($name)){
            $error_message .= '<p>Please enter a name</p>';
        } if(empty($_POST['phone'])){
             $error_message .= '<p>Please enter a phone</p>';
        } if(empty($_POST['email'])){
             $error_message .= '<p>Please enter a email</p>';
        }  if(empty($_POST['zip'])){
             $error_message .= '<p>Please enter a zip</p>';
        } if(!is_numeric($phone)){
            $error_message .= '<p>Please enter only numbers in your phone number box</p>';
        } if(!is_numeric($zip)){
            $error_message .= '<p>Please enter only digits in your zip code field</p>';
        }
        
        
        $pdo = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
        
        $sql = $pdo->prepare("insert into users set fullname = :fullname, email = :email, phone = :phone, zip = :zip");
        
        $sql->bindParam(':fullname', $name, PDO::PARAM_STR);
        $sql->bindParam(':phone', $phone, PDO::PARAM_INT);
        $sql->bindParam(':email', $email, PDO::PARAM_STR);
        $sql->bindParam(':zip', $zip, PDO::PARAM_STR);
        if($error_message == ''){
        if ( $sql->execute() && $sql->rowCount() > 0 ){
        echo 'Data has been saved';
        
        } else {
            echo 'Data is not saved';
        }
        } else {
            echo $error_message;
        }
        ?>
       <a href="form.php">Add User</a>
       <a href="view_page.php">view Data</a>
    </body>
</html>
