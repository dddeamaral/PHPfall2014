<?php
$email = $_POST['email'];
$password = $_POST['password'];
$error = array();
$password = sha1($password);
var_dump($_POST);

if ( filter_var($email, FILTER_VALIDATE_EMAIL) != TRUE){
    array_push($error, "Your email format is not valid." );   
}
if (empty($password)){
    array_push($error, "your password must not be blank." );  
} 
if(strlen($password)< 4){
    array_push($error, "Your password must be at least 4 characters long." );  
} else {
    if(!empty($error)){
        include ('error.php');
    } else {
    require_once('database.php');
    var_dump($_POST);
    $emailquery = mysql_query("SELECT email FROM signup WHERE email = '$email'");
    $hashquery = mysql_query("SELECT * FROM signup WHERE email = '$email' AND WHERE password = '$password'");
    
    if(!$emailquery){
        array_push($error, "Could not find the email in our database. Try again.");
        include ('error.php');
    }
    if(!$hashquery){
         array_push($error, "Your password and email comination do not match the databases. Please try again.");
          include ('error.php');
    } 
    var_dump($_POST);
    }
   include ('index.php');
}
    ?>