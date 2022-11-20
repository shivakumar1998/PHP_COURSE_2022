<?php
    if(isset($_REQUEST["name"]) || isset($_POST["age"])) {
      echo "Hi ". $_REQUEST['name']. "<br />";
      echo "Your age is ". $_REQUEST['age']. " years";
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
         <form  action = "<?php $_PHP_SELF ?>" method = "POST">
             Name: <input type = "text" name = "name" value="" />
             Age: <input type = "text" name = "age" value="" />
             <input type = "submit" />

         </form>

     </body>
 </html>
