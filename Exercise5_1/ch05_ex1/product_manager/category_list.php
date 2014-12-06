<?php include '../view/header.php'; ?>
<div id="main">

    <h1 class="top">Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
    <!-- add categories table here -->
     <?php foreach($categories as $category) : ?>
                <tr><td><?php echo $category['categoryName']; ?></td>
                <td><form action="." method="post">
                    
                    <input type="hidden" name="action" value="delete_category" />
                    
                    <input type="hidden" name="category_id" value="<?php echo $category['categoryID']; ?>" />
                    
                    <input type="submit" value="Delete" />
                </form></td></tr>
            <?php endforeach; ?>            
        </tr>
        
    <h2>Add Category</h2>
    
     <form action="." method="post">
        <input type="hidden" name="action" value="add_category" />

        <label>Name:</label> <input type="input" name="name" />

        <label>&nbsp;</label> <input type="submit" value="Add" />
        
    </form>    
    
    <!-- add form for adding a category here -->

    <p><a href="index.php?action=list_products">List Products</a></p>

</div>
<?php include '../view/footer.php'; ?>