<?php

$var = 18;

if ($var % 2 == 0 && $var % 3 ==0){
  echo "Divisible by both!";
}

elseif($var % 2 == 0){
  echo "Divisible by 2";
}

elseif ($var % 3 == 0) {
  // code..
  echo "Divisible by 3";
}

else{
  echo "not Divisible by either 2 or 3";
}
