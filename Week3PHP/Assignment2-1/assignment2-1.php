<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>Save your data!</h1>
            <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
            <?php }  ?>
        
        
        <form action="validation.php" method="post">
        <label>Name:</label>
        <input type="text" name="Name"/><br />
        
        <label>Phone:(Numbers Only)</label>
        <input type="text" name="Phone"/><br />
        
        <label>Email:</label>
        <input type="text" name="Email"/><br />
        
        <label>Zip:</label>
        <input type="text" name="ZIP"/><br />
        
          <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Save Data" /><br />
            </div>
        
        </form>
        
      
        
        <?php
        
        $pdo = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
        $sql = "insert into userdata set Name='" . $_POST['Name'] .  "', Phone = '". $_POST['Email'] ."', "
                . "Email = '" . $_POST['Email'] . "', Zip = '" . $_POST['ZIP'] . "';";
        if($error_message = ''){
          if ( $pdo->exec($sql) ) {
                    echo 'Saved Data';                    
                } else {
                    echo 'Saved NOT Data';
                }
        }else{
            echo 'wrong';
        }
        
        
        
        ?>
    </body>
</html>
