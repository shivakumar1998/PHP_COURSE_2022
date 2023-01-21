<!--write a program to check whether a number is positive, negative, zero-->
<?php

$value = 157;

if($value > 0)
{
  echo "the value is positive" .$value;
}
elseif ($value == 0) {
  echo "the value is equal to 0".$value;
}
elseif ($value < 0) {
  echo "the value is negative".$value;
}
else {
  echo "please enter a numeric value";
}
 ?>
