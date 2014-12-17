<?php


$email = $_POST['email'];
$passwords = $_POST['passwords'];



if ( filter_var($email, FILTER_VALIDATE_EMAIL) != TRUE){
    $error = "Your email format is not valid.";
    include('error.php'); 
}
if (empty($passwords)){
    $error = "your password must not be blank.";
    include('error.php'); 
} 
if(strlen($passwords)< 4){
    $error = "Your password must be at least 4 characters long.";
    include('error.php');
} else {
    
    $hashword = sha1($passwords);
    require_once('database.php');
    $query = "INSERT INTO signup
                    (id, email, password)
             VALUES
             ('','$email','$hashword');";
    
    $db->exec($query);
    echo '<div><p>there is something in the database now. </p></div>';
    echo '<a href="./index.php">Login here</a>';
    
    include ('index.php');
    
}
    ?>