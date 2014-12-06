<?php
    $dsn = 'mysql:host=localhost;dbname=phpclassfall2014';
    $username = 'ddeamaral';
    $pw = 'password';

    try {
        $db = new PDO($dsn, $username, $pw);
    } catch (PDOException $e) {
        $error = "Could not connect to database!";
        include('error.php');
        exit();
    }
?>