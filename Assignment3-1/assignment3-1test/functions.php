<?php

function valid_email($email){

        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {            
            return true;
        }else{
           return false;
        }
    
}

function is_in_database($email){
  
    $dbs= $db->prepare('SELECT * FROM signup WHERE email = :email');
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    
    if($dbs->execute() && $dbs->rowCount() > 0){
        return true;
    } else{
        return false;
    }
}
function valid_password($password){
    
    if (isset($password) && strlen($password) > 4){
        return true;
    } else {
        return false;
    }
}

function search_database($password, $email){
     
    include_once('database.php');
    $dbs = $db->prepare('SELECT * FROM signup WHERE email = :email AND password = :password');
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    $dbs->bindParam(':password', $hashword, PDO::PARAM_STR);
    
    if($dbs->execute() && $dbs->rowCount() > 0){
        return true;
    } else {
        return false;
    }
}