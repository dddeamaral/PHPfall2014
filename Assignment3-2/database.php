<?php
    $dsn = 'mysql:host=localhost;dbname=phpclassfall2014';
    $username = 'ddeamaral';
    $passwords = 'password';

    try {
        $db = new PDO($dsn, $username, $passwords);
    } catch (PDOException $e) {
        $error = "Could not connect to database!";
        include('error.php');
        exit();
    }
?>