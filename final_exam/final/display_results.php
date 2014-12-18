<!DOCTYPE html>
<?php  //Dylan DeAmaral ?>
<?php
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$heard = filter_input(INPUT_POST, 'heard_from');
$contact = filter_input(INPUT_POST, 'contact_via');
$comments = filter_input(INPUT_POST, 'comments');
var_dump($heard);
var_dump($contact);
$error = array();

 
if ( filter_var($email,  FILTER_VALIDATE_EMAIL) != true ){
    array_push($error, 'Please enter a valid email address.');
}

if(!isset($heard)){
    array_push($error, 'Please check a radio button');
}

if( !isset($phone) )
{
    array_push($error, 'Please enter a phone number.');
} 
else if( strlen($phone) < 6 || strlen($phone) > 11) 
{
    array_push($error, 'Please enter a 7 digit phone number.');
}


if( empty( $error ) ){
    
    $db = new PDO('mysql:host=localhost;dbname=phpclassfall2014', 'ddeamaral', 'password');
    $dbs = $db->prepare('INSERT INTO account ( email, phone, heard, contact, comments ) VALUES (  :email, :phone, :heard, :contact, :comments );');
    
    
   
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    $dbs->bindParam(':phone', $phone, PDO::PARAM_STR);
    $dbs->bindParam(':heard', $heard, PDO::PARAM_STR);
    $dbs->bindParam(':contact', $contact, PDO::PARAM_STR);
    $dbs->bindParam(':comments', $comments, PDO::PARAM_STR);
    
    if( $dbs->execute() && $dbs->rowCount() > 0 ){
        echo 'Something has been added to the database.';
    }   
    
          include 'process.php';
    
}  


if(count($error) > 0){
    include 'index.php';
}

 ?>

