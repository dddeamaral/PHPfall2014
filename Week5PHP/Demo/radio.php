<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        
        print_r($_POST);
        
        $carSelected = filter_input(INPUT_POST, 'cars');
   
        ?>
        
          <form action="#" method="post">
            
1. ford <input type="radio" name="cars" value="ford" 
    <?php 
    if($carSelected == 'ford'){ 
        echo 'checked';  }  
    ?> /> <br />
2. chevy <input type="radio" name="cars" value="chevy" <?php if($carSelected == 'chevy'){ echo 'checked';  }  ?> /> <br />
3. honda <input type="radio" name="cars" value="honda" <?php if($carSelected == 'honda'){ echo 'checked';  }  ?>/> <br />

              
<input type="submit" value="submit" />
            
            
        </form>
        
    </body>
</html>
