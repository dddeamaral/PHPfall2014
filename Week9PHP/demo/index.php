<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        include('./sample.php');
        include('./Db.php');
        
        $sample = new Sample();
        $sample->say();
        $sample->say();
        
        
        $pdo = new Db();
        var_dump($pdo->getPDO());
        
        
        $sample->db
        ?>
    </body>
</html>
