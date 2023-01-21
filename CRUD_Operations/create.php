<?php

  include "config.php";
$first_name="";
$last_name="";
//$email="";
$gender="";

  if(isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
  }


  $sql = "INSERT INTO `users2` (`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name', '$last_name', '$email', '$password', '$gender')";

  $result = $conn->query($sql);
//$result = mysqli_query($conn, $sql);

  if ($result == TRUE) {
    echo "New Record created succesfully";
  }
  else {
    echo "Error:" . $sql . "<br />". $conn->error;
//  die(mysqli_error($conn));
  }

  $conn->close();

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h2> SignUp Form</h2>
     <form  action="" method="POST">
       <fieldset>
         <legend> Personal Information:</legend>
         First Name: <br>
         <input type="text" name="firstname" value="">
         <br>
         Last Name: <br>
         <input type="text" name="lastname" value="">
         <br>
         Email:<br>
         <input type="text" name="email" value="">
         <br>
         Password: <br>
         <input type="password" name="password" value="">
         <br>
         Gender: <br>
         <input type="radio" name="gender" value="Male">Male
         <input type="radio" name="gender" value="Female">Female
         <br><br>
         <input type="submit" name="submit" value="submit">

       </fieldset>


     </form>

   </body>
 </html>
