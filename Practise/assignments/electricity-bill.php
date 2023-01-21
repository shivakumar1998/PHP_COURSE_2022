<!--write a program to calculate electricity bill-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Calculate Electricity Bill </title>
  </head>
  <body>


    <?php
      $result_str = $result = '';

      if(isset($_POST['unit-submit'])) {
        $units = $_POST['units'];

        if(!empty($units)) {
          $result = calculate_bill($units);
          $result_str = 'Total amount of ' . $units. ' - ' . $result;
        }
      }


      /**
      * To calculate electricity bill as per unit cost
      */

      function calculate_bill($units)
      {
        $unit_cost_first = 3.50;
        $unit_cost_second = 4.00;
        $unit_cost_third = 5.20;
        $unit_cost_fourth = 6.50;

        if($units <= 50){
          $bill = $units * $unit_cost_first;
        }
        elseif ($units > 50 && $units <= 100) {
          $temp = 50 * $unit_cost_first;
          $remaining_units = $units - 50;
          $bill = $temp + ($remaining_units * $unit_cost_second);
        }
        elseif ($units >100 && $units <=200) {
          $temp = (50*3.5) + (100 * $unit_cost_second);
          $remaining_units = $units - 150;
          $bill = $temp + ($remaining_units * $unit_cost_third);
        }
        else {
          $temp = (50*3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        }
        return number_format((float)$bill, 2, '.','');
      }
      ?>

      <div id = "page-wrap">
            <h1> Calculate Electricity bill </h1>
            <form action="" method="POST" id="quiz-form">
              <input type="number" name="units" id="units" placeholder="Please enter No. of units"/>
                <input type="submit" name="unit-submit" id="unit-submit"  value="Submit"/>


            </form>
            <div>
              <?php echo "<br />" . $result_str; ?>
            </div>

      </div>
  </body>
</html>
