<?php
$category_name = $_POST['category_name'];
$category_id = $_POST['category_id'];

if (empty($category_name)){
    $error = "You must put fill out the category name field.";
    include('error.php');
} else {
    require_once('database.php');
    $query = "INSERT INTO categories(categoryID, CategoryName)"
            . "VALUES('$category_id','$category_name')";
    $db->exec($query);
    include('category_list.php');
}
    ?>
