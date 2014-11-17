<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $my_str1 = 'string1';
        $my_str2 = "single $my_str1";
        $my_str3 = 'single' . $my_str1;
        
        //echo $my_str2;
        echo $my_str3;
        
        ?>
    </body>
</html>
