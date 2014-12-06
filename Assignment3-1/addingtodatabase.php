<?php
$email = $_POST['email'];
$password = $_POST['password'];
$error = array();
$hashword = sha1($password);

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

    $emailquery = mysql_query("SELECT email FROM signup WHERE email = '$email'");
    $hashquery = mysql_query("SELECT * FROM signup WHERE email = '$email' AND WHERE password = '$hashword'");
 
    $db->query($emailquery);
    $db->query($hashquery);

    if($emailquery){
        array_push($error, "Could not find the email in our database. Try again.");
        include ('error.php');
    }
    if($hashquery){
         array_push($error, "Your password and email combination do not match the databases. Please try again.");
          include ('error.php');
    } else if (empty($error)){
        echo "You have successfully logged in.";
    }
   }
   echo "<p><a href='index.php'>". "Return To home page" . "</a><p>";
}
    ?>