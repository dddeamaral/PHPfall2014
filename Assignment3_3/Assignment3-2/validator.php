<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of validator
 *
 * @author Dylan
 */
class validator {
    
    
public function valid_email( $email ){

        if( filter_var( $email, FILTER_VALIDATE_EMAIL ) )
        {            
            return true;
        }else{
           return false;
        }
    
}

public function is_in_database( $email ){
  
    $db = new PDO('mysql:host=localhost;dbname=phpclassfall2014', 'root', '' );
    $dbs= $db->prepare('SELECT * FROM signup WHERE email = :email');
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    
    if($dbs->execute() && $dbs->rowCount() > 0){
        return true;
    } 
    else
    {
        return false;
    }
}

public function valid_password( $password ){
    
    if (isset($password) && strlen($password) > 4){
        return true;
    } else {
        return false;
    }
}

public function search_database( $password, $email ){
     
    $db = new PDO('mysql:host=localhost;dbname=phpclassfall2014', 'root', '' );
    $dbs = $db->prepare('SELECT * FROM signup WHERE email = :email AND password = :password');
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    $dbs->bindParam(':password', $password, PDO::PARAM_STR);
    
    if( $dbs->execute() && $dbs->rowCount() > 0 ){
        return true;
    } else {
        return false;
    }
}
    
}
