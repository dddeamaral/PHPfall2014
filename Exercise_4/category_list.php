<?php
    require_once('database.php');

    // Get all categories
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $categories = $db->query($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header">
        <h1>Product Manager</h1>
    </div>

    <div id="main">

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
    <!-- add code for the rest of the table here -->
    
    <?php foreach ($categories as $category) : ?>    <tr>
    <td><?php echo $category['categoryName'] ?></td>
    <td><form action = "delete_category.php" method = "post" id = "delete_category_form">
            <input name="category_id" type = "hidden" value = "<?php echo $category['categoryID'] ?>"/>
            <input type = "submit" value = "delete"/>
        </form></td></tr>
    <?php endforeach; ?>
    
    </table>
    <br />

    <h2>Add Category</h2>
    
    <!-- add code for the form here -->
    <form action="add_category.php" method="post" id="add_category_form">
    <input type="text" name = "category_name"></input>
    <input type="submit" action = "add_category.php" value = "Add"></input>
    </form>
    
    <br />
    <p><a href="index.php">List Products</a></p>

    </div> <!-- end main -->

    <div id="footer">
        <p>
            &copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.
        </p>
    </div>

    </div><!-- end page -->
</body>
</html>