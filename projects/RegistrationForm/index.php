<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> LOGIN </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form class="" action="login.php" method="post">
      <h2>LOGIN</h2>
      <?php if(isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label for="username">User Name</label>
        <input type="text" name="username" placeholder="User Name"><br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit">Login</button>

    </form>

  </body>
</html>
