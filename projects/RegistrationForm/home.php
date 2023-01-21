<?php

  session_start();

  if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>HOME</title>
        <link rel="stylesheet" href="/style.css">
      </head>
      <body>
        <h1>Hello, <?php echo $_SESSION['username']; ?></h1>

      </body>
    </html>
    <?php
  }
  else {
      header("Location: index.php");
      exit();
  }
     ?>
