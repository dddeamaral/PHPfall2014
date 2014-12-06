<?php
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}

switch ($action) {
    case 'start_app':
        $message = 'Enter some data and click on the Submit button.';
        break;
    case 'process_data':
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
        // 2. display the name with only the first letter capitalized
            if(!isset($name)){
                $message = "Please enter a name for the name field.";
                break;
            } else{
                $first_name = explode(' ', $name);
                $first_name = $first_name[0];
                $first_name = ucfirst($first_name);
            }
        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        // 2. make sure the email address has at least one @ sign and one dot character
            if(!isset($email)){
                $message = "Please enter an email.";
                break;
            } else if( filter_var($email, FILTER_VALIDATE_EMAIL) != TRUE){
                   $message = "Please enter a valid email.";
                   break;
               }
        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
        // 2. format the phone number like this 123-4567 or this 123-456-7890
               if(!isset($phone)){
                   $message = "Please enter a phone number.";
                   break;
               } else {
               $phone = str_replace("-", "", $phone);
               $phone = str_replace(".", "", $phone);
               $phone = str_replace(" ", "", $phone);
               
               $lengthOfPhone = strlen($phone);
               
               if ($lengthOfPhone == 7){
                $phone1 = substr($phone, 0, 3);
                $phone2 = substr($phone, 3);
                $phone = "$phone1-$phone2";
               }  else if($lengthOfPhone == 10)
            {
                $phone1 = substr($phone, 0, 3);
                $phone2 = substr($phone, 3, 3);
                $phone3 = substr($phone, 6);        
                $phone = "$phone1-$phone2-$phone3";
            }    
            else
            {
                $message = "Phone must be between 7 and 10 digits long.";
                break;
            }
               }
        /*************************************************
         * Display the validation message
         ************************************************/
        $message = "Hello " . $first_name .",\n\n" . 
                        "Thank you for entering this data:\n\n" .
                        "Name: " . $name . "\n" .
                        "E-mail: " .$email . "\n" .
                        "Phone:" . $phone;

        break;
}
include 'string_tester.php';
?>