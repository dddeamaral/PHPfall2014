<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        <label>Name:</label>
        <input type="input" name="update_name" value="<?php echo $value['fullname']; ?>"/><br />
        
        <label>Email:</label>
        <input type="input" name="update_email" value="<?php echo $value['email']; ?>"/><br />
        
        <label>Phone:</label>
        <input type="input" name="update_phone" value = "<?php echo $value['phone']; ?>"/><br />
        
        <label>Zip:</label>
        <input type="input" name="update_zip" value = "<?php echo $value['zip']; ?>"/><br />
        
        <input type = "submit" name="submit_button" action="update_user.php"/>
        
        
    </body>
</html>
