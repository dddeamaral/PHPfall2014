<?php

if(isset($_POST['email'])){ $email = $_POST['email']; } // take all the inputted fields
if(isset($_POST['password'])){ $pw = $_POST['password']; }

if ( empty($email) ||  empty($pw)) { // error checking
    $error = "Do not leave either field blank.";
    include('error.php'); return;}
if (strlen($pw)<4){
    $error = "Password must be greater than 4 characters long.";
    include('error.php'); return;}
if (!strpos($email, '@')||!strpos($email, '.')){
    $error = "Invalid e-mail entry.";
    include('error.php'); return;}    
 else {
    $pw = sha1($pw); // hash pw
    //
    // if valid, add to userdata
    
    require_once('database.php'); // check db
    
    $query = "INSERT INTO signup
                 (id, email, password)
              VALUES
                 ('', '$email','$pw');"; // add row
    $db->exec($query);
    echo '<pre><font color=blue>Signup completed. Added to DB.</pre></font>';
    // go back home
    include('index.php');
}
?>