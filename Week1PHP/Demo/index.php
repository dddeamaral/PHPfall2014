
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "my page title"; ?></title>
    </head>
    <body>
        
        <?php echo "<h1>my page title</h1>"; ?>
        
        <?php
        //phpinfo();
        $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
            echo strip_tags($text);
               echo "\n";

// Allow <p> and <a>
echo strip_tags($text, '<p><a>');
        
        ?>
    </body>
</html>
