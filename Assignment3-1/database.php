<?php
    $dsn = 'mysql:host=localhost;dbname=phpclassfall2014';
    $username = 'ddeamaral';
    $password = 'password';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error = "Could not connect to database!";
        include('error.php');
        exit();
    }
?>