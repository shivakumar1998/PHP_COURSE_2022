<?php
    if(isset($_POST['name']) || isset($_POST['age'])) {
      if(preg_match("/[^A-Za-z'-]/",$_POST['name'])) {
        die("Invalid name. Name should be alphabet");
      }
      echo "Hello". $_POST['name']. "<br />";
      echo "Your age is ". $_POST['age']. "<br />";

      exit();
    }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form  action = "<?php $_PHP_SELF ?>" method = "post">
       Name: <input type = "text" name = "name" value="" />
       Age: <input type = "text" name = "age" value="" />
       <input type = "submit" />
       
     </form>

   </body>
 </html>
