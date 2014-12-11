<?php
$email = $_POST['email'];
$password = $_POST['password'];

include_once 'functions.php';

if (valid_email($email) == true){
    
    if(valid_password($password) == true){
        $hashword = sha1($password);
        
        if(is_in_database($email) == true){
            
            if(search_database($hashword, $email) == true){
                header('Location: admin.php');
            }else{
                array_push($error, 'Your password and email combonation don\'t match our records.');
            }
        }else{
            array_push($error, 'Email is not in database.');
            include('error.php');
        }
    }else{
        array_push($error, 'Password is not valid.');
        include('error.php');
    }
} else{
    array_push($error, 'Email is not valid.');
    include('error.php');
}


    ?>