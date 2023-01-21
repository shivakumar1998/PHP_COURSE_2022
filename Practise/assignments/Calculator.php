<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Calculator </title>
  </head>
  <body>
    <?php
    #variables declaration
    $first_num = $_POST['first_num'];
    $second_num = $_POST['second_num'];
    $operator = $_POST['operator'];
    $result ="";
    #condition
    if(is_numeric($first_num) && is_numeric($second_num)){
      switch ($operator) {
        case 'Add':
            $result = $first_num + $second_num;
          break;
        case 'Subtract':
            $result = $first_num - $second_num;
          break;
        case 'Multiply':
            $result = $first_num * $second_num;
          break;
        case 'Divide':
            $result = $first_num / $second_num;
          break;
        default:
          echo "Invalid option";
      }
    }
     ?>

     <h1> Simple Calculator </h1>
     <form class="" action="" method="post" id="quiz-form">
       First Number: <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" />
       Second Number: <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" />
       Result: <input readonly="readonly"  name="result" value="<?php echo $result; ?>" />
       <p>

         <input type="submit" name="operator" value="Add">
         <input type="submit" name="operator" value="Subtract">
         <input type="submit" name="operator" value="Multiply">
         <input type="submit" name="operator" value="Divi">

       </p>

     </form>

  </body>
</html>
