<?php
    if(isset($_GET['name']) || isset($_GET['age'])) {
      echo "Hi" . $_GET['name'] . "<br />";
      echo "Your age is" . $_GET['age'] . " years";
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
        <form  action = "<?php $_PHP_SELF ?>" method = "GET">
            Name: <input type="text" name="name" value="" />
            Age: <input type="text" name="age" value="" />
            <input type="submit" />
             


        </form>

    </body>
</html>
