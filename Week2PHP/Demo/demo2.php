<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>My Form</h1>
        <form action="#" method="get">
            
           Name: <input type = "test" name="fname" />
            <input type = "submit"/>
        </form>
        
        <?php
        var_dump($_GET);
        
        echo $_GET['fname'];
        
        echo filter_input(INPUT_GET, 'fname');
        
        if($_GET['fname']== '1'){
            echo '<p>this is one</p>';
        }else if($_GET['fname']== '2'){
             echo '<p>this is two</p>';
        }
        
        ?>
    </body>
</html>
