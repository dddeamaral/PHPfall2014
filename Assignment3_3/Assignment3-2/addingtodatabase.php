<?php
$email = $_POST['email'];
$password = $_POST['password'];
$error = array();
 $hashword = sha1($password);
include 'functions.php';
session_start();

    include './validator.php';
    $validate = new validator();
    
    
    if( !$validate->valid_email($email) )
    {
        array_push($error, 'Email is not valid.');
    }

    if( !$validate->valid_password($password) ) {
        array_push($error, 'Password is not valid.');   
    }
               
    if( !$validate->is_in_database($email) ) {
        array_push($error, 'Email is not in database.');
    }
                
    if( !$validate->search_database($hashword, $email) ) {
        array_push($error, 'Your password and email combonation don\'t match our records.');
    }
               
                
                
    if( empty($error) ) {
        $_SESSION['loggedin'] = true;                 
    } else {                
        include 'error.php';
    }
     
  if( isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){
      header('Location: admin.php');
  }




    ?>