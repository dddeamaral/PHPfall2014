<?php
    // get the data from the form
    $investment = $_POST['investment'];
    $interest_rate = $_POST['interest_rate'];
    $years = $_POST['years'];
    $date = date("F j, Y, g:i a"); 
    $error_message = '';
    // validate investment entry
    if ( empty($investment) ) {
        $error_message .= '<p>Investment is a required field.</p>'; }
    else if ( !is_numeric($investment) )  {
        $error_message .= '<p>Investment must be a valid number.</p>'; }
    else if ( $investment <= 0 ) {
        $error_message .= '<p>Investment must be greater than zero.</p>'; }

    // validate interest rate entry
    if ( empty($interest_rate) ) {
        $error_message .= '<p>Interest rate is a required field.</p>'; }
    else if ( !is_numeric($interest_rate) )  {
        $error_message .= '<p>Interest rate must be a valid number.</p>'; }
    else if ( $interest_rate <= 0 || $interest_rate >=16 ) {
        $error_message .= '<p>Your interest rate must be greater than 0 less than or equal to 15.</p>'; }
    //My years stuff
        if ($years > 50){
        $error_message .= '<p>Please enter a value for years that is less than 50</p>';}
    else if ( !is_numeric($years) )  {
        $error_message .= '<p>Years must be a valid number.</p>';  }
    else if ( empty($years) ) {
        $error_message .= '<p>years is a required field.</p>'; }
    // set error message to empty string if no invalid entries
    
       

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }

 
    
    // calculate the future value
    $future_value = $investment;
    for ($i = 1; $i <= $years; $i++) {
        $future_value = ($future_value + ($future_value * $interest_rate *.01));
    }
    // apply currency and percent formatting
    $investment_f = '$'.number_format($investment, 2);
    $yearly_rate_f = $interest_rate.'%';
    $future_value_f = '$'.number_format($future_value, 2);
    
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <div id="content">
        <h1>Future Value Calculator</h1>

        <label>Investment Amount:</label>
        <span><?php echo $investment_f; ?></span><br />

        <label>Yearly Interest Rate:</label>
        <span><?php echo $yearly_rate_f; ?></span><br />

        <label>Number of Years:</label>
        <span><?php echo $years; ?></span><br />

        <label>Future Value:</label>
        <span><?php echo $future_value_f; ?></span><br />
        <span><?php echo '<p>This calculation was done on <p/>' . $date; ?></span><br />
        
        <a href="index.php">Home Page</a>
    </div>
</body>
</html>