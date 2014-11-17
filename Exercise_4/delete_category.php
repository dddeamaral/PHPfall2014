<?php
$category_id = $_POST['category_id'];

require_once('database.php');
$query = "DELETE FROM categories WHERE categoryID = '$category_id'";
$db->exec($query);

include('category_list.php');
?>