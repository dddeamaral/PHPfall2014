<?php

include 'Models/database.php';
include 'Models/users.php';
include 'views/header.php';

$action = 'home';
if(!empty($_POST)&& isset($_POST['action'])){
    $action = $_POST['action'];
    //filter_input
}else if(!empty($_GET) && isset($_GET['action'])){
    $action = $_GET['action'];
    
}
        
if($action === 'view_products'){
    $users = read_users();
    include './views/user.php';
}else if($action === 'add_products'){
    echo 'add products';
}else{
    echo 'hello home';
}

include 'views/footer.php';