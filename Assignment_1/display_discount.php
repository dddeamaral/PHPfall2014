<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <div id="content">
        
        <?php 
        $product_description = $_POST['product_description'];
        $list_price = $_POST['list_price'];
        $discount_percent = $_POST['discount_percent'];
        
      if (empty($product_description)){
          $err_msg = 'Please fill out the Product Description box';
      
      } else if(empty($list_price)){
          $err_msg = 'Please fill out the list price field';
      } else if (empty($discount_percent)){
          $err_msg = 'Please fill out the Discount Percent';
      } else if (!is_numeric($list_price)){
          $err_msg = 'Please enter only digits for list price';
      } else if (is_numeric($product_description)){
          $err_msg = 'Please only enter non numeric characters for the prodcut description.';
      } else if (!is_numeric($discount_percent)){
          $err_msg = 'Please enter a discount percent that only contains numbers';
      } else {
          $err_msg = '';
      }
      
      if ($err_msg != ''){
          include 'index.php';
          exit();
      }
        
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;
    $list_price_formatted = "$".number_format($list_price, 2);
    $discount_percent_formatted = $discount_percent."%";
    $discount_formatted = "$".number_format($discount, 2);
    $discount_price_formatted = "$".number_format($discount_price, 2);    

        ?>
        
        <h1>Displaying the discount</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br />

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br />

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent?></span><br />

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br />

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>