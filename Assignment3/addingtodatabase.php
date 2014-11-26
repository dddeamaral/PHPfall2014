<?php


$email = $_POST['email'];
$password = $_POST['password'];



if ( filter_var($email, FILTER_VALIDATE_EMAIL) != TRUE){
    $error = "Your email format is not valid.";
    include('error.php'); 
}
if (empty($password)){
    $error = "your password must not be blank.";
    include('error.php'); 
} 
if(strlen($password)< 4){
    $error = "Your password must be at least 4 characters long.";
    include('error.php');
} else {
    
    $password = sha1($password);
    require_once('database.php');
    $query = "INSERT INTO signup
                    (id, email, password)
             VALUES
             ('','$email','$password');";
    
    $db->exec($query);
    echo '<div><p>there is something in the database now. </p></div>';
    
    include ('index.php');
    
}
    ?>