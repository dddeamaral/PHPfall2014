<?php
$email = $_POST['email'];
$password = $_POST['password'];

function valid_email($email){
    global $error;
    $error = array();
    if(strlen($email) > 1){
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {            
            return true;
        }else{
           array_push($error, 'Your email is not valid. Please enter a valid email.');
           return false;
        }
    } else{
        array_push($error, 'Your email address wasn\'t fill in');
        return true;
    }
}

function is_in_database($email){
   global $error;
   $error = array();

   include('database.php');
    $dbs= $db->prepare('SELECT * FROM signup WHERE email = :email');
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    
    if($dbs->execute() && $dbs->rowCount() > 0){
        return true;
    } else{
        array_push($error, 'Email is not in database, try entering a validated email.');
        return false;
    }
}

function valid_password($password){
    
    global $error;
    
    if (isset($password) && strlen($password) > 4){
        return true;
    } else {
        array_push($error, 'Please enter a valid password greater than 4 characters.');
        return false;
    }
}

function search_database($password, $email){
    $error = array();
    global $error;
    global $hashword;
    
    if (valid_password($password) === true){
        $hashword = sha1($password);
    }
    
    include('database.php');
    $dbs = $db->prepare('SELECT * FROM signup WHERE email = :email AND password = :password');
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    $dbs->bindParam(':password', $hashword, PDO::PARAM_STR);
    
    if($dbs->execute() && $dbs->rowCount() > 0){
        return true;
    } else {
        return false;
    }
}


if (valid_email($email) == true){
    
    if(valid_password($password) == true){
        
        if(is_in_database($email) == true){
            
            if(search_database($password, $email) == true){
                echo 'Login successful!!!';
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