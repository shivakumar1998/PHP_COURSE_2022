<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eligibility To Vote</title>
  </head>
  <body>
    <h2>Eligibility To Cast Vote</h2>
    <?php
      //$name = "shiva";
      $age = 19;
      if($age >= 18){
        echo "person is eligible to case vote" . $age;

      }
      else {
        echo "person is not eligible to cast vote".$age;
      }


     ?>

  </body>
</html>
