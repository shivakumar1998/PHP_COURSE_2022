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
          if(!preg_match("/^[a-zA-Z-']*$/", $name)) {
            $nameErr = "Only letters and white spaces allowed";
          }
        }
      }

      if(empty($_POST["email"])) {
        $emailErr = "Valid Email Address";
      }
      else {
        $email = test_input($_POST["email"]);

      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "The email address is incorrect";
      }
    }

    if(empty($_POST["website"])) {
      $website = "";
    }
    else {
      $website = test_input($_POST['website']);
      if(!preg_match("/(?i)\b((?:https?://|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'\".,<>?«»“”‘’]))/", $website)) {
        $websiteErr = "Enter a valid website URL";
      }
    }

    if(empty($_POST["comment"])) {
      $comment = "";
    }
    else {
      $comment = test_input($_POST["comment"]);
    }

    if(empty($_POST["gender"])) {
      $genderErr = "Please select a gender";
    }
    else {
      $gender = test_input($_POST["gender"]);
    }
  //}

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

     ?>

     <h2> PHP Form Validation Example </h2>
     <p> <span class="Error">* required field </span> </p>
     <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="post">
       FullName: <input type="text" name="name" value="">
       <span class="error">* <?php echo $nameErr; ?></span>
       <br><br>

       E-mail address: <input type="email" name="email">
       <span class="error">* <?php echo $emailErr; ?></span>
       <br><br>

       Website: <input type="text" name="website" value="">
       <span class="error"> <?php echo $websiteErr; ?></span>
       <br><br>

       Comment: <textarea name="comment" rows="2" cols="10"></textarea>
       <br><br>

       Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
          <span class="error">* <?php echo $genderErr; ?></span>
       <br><br>

       <input type="submit" name="submit" value="Submit">

     </form>

     <?php
     echo "<h2> Your Input: </h2>";
     echo $name;
     echo "<br />";
     echo $email;
     echo "<br />";
     echo $website;
     echo "<br />";
     echo $comment;
     echo "<br />";
     echo $gender;


     ?>

  </body>
</html>
