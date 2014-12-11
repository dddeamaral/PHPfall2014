<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <title>Assignment 3-1</title>
</head>

<body>
        <h2>There was a problem...</h2>
        <ul><?php foreach($error as $errors) : ?>
            <li><?php echo $errors;?></li>
            <?php endforeach;?>
        </ul>
        
        <p><a href="login.php">Return to index</a></p>
        

</body>
</html>