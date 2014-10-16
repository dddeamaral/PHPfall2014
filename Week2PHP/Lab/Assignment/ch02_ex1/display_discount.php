<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    
    
     <?php 
        //Get input and stores it
        $product_description = $_POST['product_description'];
        $list_price = $_POST['list_price'];
        $discount_percent = $_POST['discount_percent'];
        //Calculations
        $discount = $list_price * $discount_percent *.01;
        $discount_price = $list_price - $discount;
        //formatting the information number_format($list_price, 1)
        $list_price_formatted = "$". number_format($list_price, 2);
        $discount_percent_formatted = $discount_percent."%";
        $discount_formatted = "$".  number_format($discount, 2);
        $discount_price_formatted = "$".  number_format($discount_price, 2);
            
        if(empty($product_description)){
            $error_message = 'You need to enter a product description.';
        } else if (is_numeric($product_description) || !is_string($product_description)){
            $error_message = 'This value must be a string';
        }else if ( empty($list_price) ) {
        $error_message = 'List Price is a required field.'; }
        else if ( !is_numeric($list_price) || is_string($list_price) )  {
        $error_message = 'List Price must be a valid number.'; }
         
         else {
        $error_message = ''; }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }
        ?> 
    
    <div id="content">
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br />

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br />

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br />

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br />

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br />

        
       
        
        <p>&nbsp;</p>
    </div>
</body>
</html>