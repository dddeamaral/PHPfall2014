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
        $error_message = '';
        var_dump($_POST);
        if(!is_numeric($phone)){
            $error_message = "Your phone number must be only in digits";
            include ('Errorpage.php');
        } else if (strlen($phone) < 7){
            $error_message = 'Your phone number must be at least 7 digits long';
        } else if (strlen($zip) < 5 && strlen($zip)>5){
            $error_message = 'Your ZIP Code must be 5 digits long';
        } else if(is_numeric($name)){
            $error_message = 'Your name must not contain numbers';
        } else
        {
            
            echo "hello";
            $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");

            $dbs = $db->prepare('UPDATE users SET fullname = :name, email = :email, zip = :zip, phone = :phone  WHERE id = :id');
            
            $dbs->bindParam(':id', $id, PDO::PARAM_INT);
            $dbs->bindParam(':name', $name, PDO::PARAM_STR);
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs->bindParam(':zip', $zip, PDO::PARAM_STR);
            $dbs->bindParam(':phone', $phone, PDO::PARAM_STR);
  
           if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
            echo '<h1> user ', $id,' was updated</h1>';
            } else {
             echo '<h1> user ', $id,' was <strong>NOT</strong> updated.</h1>';
             var_dump($db->errorInfo());
            }       
            
        }
            
        
        echo $error_message;
        ?>
        <a href = "view_page.php">Go back to table</a><br>
        <a href = "add_user.php">Add a user</a>
        
    </body>
</html>
