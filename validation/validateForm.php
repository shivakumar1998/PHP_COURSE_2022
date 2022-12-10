<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
      .error {

        color: #FF0000;
      }
    </style>
    <title> FormValidation </title>
  </head>
  <body>
    <?php
      //define variables and set to empty
      $nameErr = $emailErr = $genderErr = $websiteErr = "";

      $name = $email = $gender = $comment = $website = "";

      if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($_POST["name"])) {
          $nameErr = "please enter a valid name";
        }
        else {
          $name = test_input($_POST["name"]);
        }
      }




     ?>

  </body>
</html>
