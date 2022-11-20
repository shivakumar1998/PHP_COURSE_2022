<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Form</title>
  </head>
      <h1> Blood Donation Camp </h1>
  <body bgcolor = "#FA8072">
    <div> <h2>Registration Form</h2> </div>
    <form  action="connect.php" method="post">
      <label for="user">Name:</label> <br>
      <input type="text" name="name" id="name" required> <br><br>

      <label for="email">Email: </label> <br>
      <input type="email" name="email" id="email" required> <br><br>

      <label for="phone">Phone: </label> <br>
      <input type="text" name="phone" id="phone" required> <br><br>

      <label for="bgroup">Blood Group: </label> <br>
      <input type="text" name="bgroup" id="bgroup" required> <br><br>

      <input type="submit" name="submit" id ="submit" />
      

    </form>


  </body>
</html>
