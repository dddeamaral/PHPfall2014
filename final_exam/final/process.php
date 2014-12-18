<!DOCTYPE html> 
            <html>
    <head>
        <meta charset="UTF-8">
         <title>Mailing List Results</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
       <div id="content">
            <h1>Account Information</h1>

            <label>Email Address:</label>
            <span><?php echo $email ?></span><br />

            <label>Phone:</label>
            <span>  <?php echo htmlspecialchars($phone);   ?>  </span><br />
            
            <label>Heard From:</label>
            <span>   <?php echo htmlspecialchars($heard); ?>  </span><br />

            <label>Contact Via:</label>
            <span> <?php echo htmlspecialchars($contact); ?> </span><br /><br />

            <span>Comments:</span><br />
            <span> <?php echo htmlentities($comments); ?> </span><br />

        </div>
    </body>
</html>
;