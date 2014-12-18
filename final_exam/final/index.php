<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mailing List</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>       
         <div id="content">
            <h1>Account Sign Up</h1>
            <body>     
    <?php 
            
            
        if (isset($error) && count($error)> 0) : ?>
        <h2>Errors:</h2>
        <ul>
        <?php foreach($error as $errors) : ?>
            <li><?php echo $errors; ?></li>
        <?php endforeach; ?>
        </ul>
        <?php endif; ?>
           
                
            </body>
            <form action="display_results.php" method="post">
                
       
                
            <fieldset>
            <legend>Account Information</legend>
                <label>E-Mail:</label>
                <input type="text" name="email" value="<?php if(isset($email)){ echo $email;  }?>" class="textbox"/>
                <br />

                <label>Phone Number:</label>
                <input type="text" name="phone" value="<?php if(isset($phone)){ echo $phone;  }?>" class="textbox"/>
            </fieldset>

            <fieldset>
            <legend>Settings</legend>

                <p>How did you hear about us?</p>
                <input type="radio" name="heard_from" value="Search Engine" <?php if(isset($heard)){if($heard === "Search Engine"){ echo 'checked="checked"'; } }?>/>
                Search engine<br />
                <input type="radio" name="heard_from" value="Friend" <?php if(isset($heard)){if($heard === "Friend"){ echo 'checked="checked"'; }} ?>/>
                Word of mouth<br />
                <input type=radio name="heard_from" value="Other" <?php if(isset($heard)){if($heard === "Other"){ echo 'checked="checked"'; }} ?>/>
                Other<br />

                <p>Contact via:</p>
                <select name="contact_via">
                    <option value="email" <?php
                       
                    
                    if(isset($contact)){if ( $contact === 'email') 
                    {
                     echo 'selected="selected"';
                    }}?>>Email</option>
                        <option value="text" <?php
                        if(isset($contact)){if ($contact === 'text') 
                    {
                     echo 'selected="selected"';
                        }}?>>Text Message</option>
                        <option value="phone" <?php
                        if(isset($contact)){if ( $contact === 'phone') 
                    {
                     echo 'selected="selected"';
                        }}?>>Phone</option>
                </select>

                <p>Comments: (optional)</p>
                <textarea name="comments" rows="4" cols="50"><?php if (isset($comments)){ echo $comments; } ?></textarea>
            </fieldset>

            <input type="submit" value="Submit" />

            </form>
            <br />
        </div>
    </body>
</html>
