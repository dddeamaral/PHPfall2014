<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        var_dump($_POST);
        
        
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        $dbs = $db->prepare('select * from users where id = :id');
        
        
        
        
        $id = filter_input(INPUT_GET, 'id');
        $name = '';
        $email = '';
        $phone = '';
        $zip = '';
        
        $dbs->bindParam(':id', $id, PDO::PARAM_INT);
        
                if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
     
                    $results = $dbs->fetch(PDO::FETCH_ASSOC);
                    $name = $results['fullname'];
                    $email = $results['email'];
                    $phone = $results['phone'];
                    $zip = $results['zip'];
 } else {
      echo '<h1> user ', $id,' was <strong>NOT</strong> updated</h1>';
 }      
        ?>
        <form action = "update_user.php" method = "post">
        <label>Name:</label>
        <input type="input" name="name" value="<?php echo $name; ?>"/><br />
        
        <label>Email:</label>
        <input type="input" name="email" value="<?php echo $email; ?>"/><br />
        
        <label>Phone:</label>
        <input type="input" name="phone" value = "<?php echo $phone; ?>"/><br />
        
        <label>Zip:</label>
        <input type="input" name="zip" value = "<?php echo $zip; ?>"/><br />
        
        <input type="hidden" name="id" value = "<?php echo $id; ?>"/>
        
        <input type = "submit" name="submit_button" action="update_user.php"/>
        
       <?php 
       
 
       ?>
        </form>
        
    </body>
</html>
