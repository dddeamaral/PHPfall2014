<?php

 if ( !empty($_POST) ) {
        
            if ( empty($_POST['fname']) === false ) {
                echo $_POST['fname'];
            } else {
                $errorMsg = 'First name is empty';
            }

            if ( isset($_POST['lname']) === true ) {
                echo $_POST['lname'];
            } else {
                $errorMsg = 'Last name is empty';
            }
            
        }
?>
